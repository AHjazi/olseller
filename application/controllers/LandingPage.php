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
		$data['title'] = "Olseller | Welcome";
		$this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('Landing_Page/Produk/produk');
        $this->load->view('partials/footer');
	}
	public function layanan()
	{
		$data['title'] = "Olseller | Welcome";
		$this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('Landing_Page/Produk/layanan');
        $this->load->view('partials/footer');
	}
	public function harga()
	{
		$data['title'] = "Olseller | Welcome";
		$this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('Landing_Page/Produk/harga');
        $this->load->view('partials/footer');
	}
	public function support()
	{
		$data['title'] = "Olseller | Welcome";
		$this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('Landing_Page/Produk/support');
        $this->load->view('partials/footer');
	}
	public function customer_service()
	{
		$data['title'] = "Olseller | Welcome";
		$this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar');
        $this->load->view('Landing_Page/Produk/customer_service');
        $this->load->view('partials/footer');
	}
}