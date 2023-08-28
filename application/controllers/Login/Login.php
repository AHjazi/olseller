<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Olseller | Login";
		$this->load->view('Login/login', $data);
    }

	public function process_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$user = $this->M_User->get_user_by_email($email);
		
    if ($user && password_verify($password, $user->password)) {
		// Login successful, set session or perform other actions
        $this->session->set_userdata('user_id', $user->id);
        return redirect('dashboard'); // Mengalihkan ke halaman dashboard setelah login sukses
    } else {
		// Login failed
        $this->session->set_flashdata('error', 'Invalid email or password');
        return redirect('login'); // Mengalihkan kembali ke halaman login dengan pesan error
    }
	}

	public function Process_Logout()
	{
		$this->session->unset_userdata('user_id');
		echo "Logout successful!";
		return redirect('login');
	}

}
