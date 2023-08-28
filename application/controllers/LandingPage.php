<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = "Olseller | Welcome";
		$this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('landing');
        $this->load->view('partials/footer');
	}
	public function produk()
	{
		$data['title'] = "Olseller | Produk";
		$this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('Landing_Page/Produk/produk');
        $this->load->view('partials/footer');
	}
	public function layanan()
	{
		$data['title'] = "Olseller | Layanan";
		$this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('Landing_Page/Produk/layanan');
        $this->load->view('partials/footer');
	}
	public function harga()
	{
		$data['title'] = "Olseller | Harga";
		$this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('Landing_Page/Produk/harga');
        $this->load->view('partials/footer');
	}
	public function support()
	{
		$data['title'] = "Olseller | Support";
		$this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('Landing_Page/Produk/support');
        $this->load->view('partials/footer');
	}
	public function customer_service()
	{
		$data['title'] = "Olseller | Customer Service";
		$this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('Landing_Page/Produk/customer_service');
        $this->load->view('partials/footer');
	}
	public function daftar()
	{
		$data['title'] = "Olseller | Daftar";
		$this->load->view('partials/header', $data);
        $this->load->view('Daftar/daftar');
	}

	public function tambah_data() 
	{
		$id_member = $this->input->post('id_member');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$nama_usaha = $this->input->post('nama_usaha');
		$jenis_usaha = $this->input->post('jenis_usaha');
		$lokasi_usaha = $this->input->post('lokasi_usaha');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'nama_usaha' => $nama_usaha,
			'jenis_usaha' => $jenis_usaha,
			'lokasi_usaha' => $lokasi_usaha,
			'no_hp' => $no_hp,
			'email' => $email
        );

		$result= $this->M_Daftar->insert_data($data,'member');

		redirect('LandingPage');
		}
}