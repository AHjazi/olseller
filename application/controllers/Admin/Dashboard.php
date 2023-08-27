<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('M_Dashboard');
	}

	public function index()
	{
		$data['jumlah_produk'] = $this->M_Dashboard->Jumlah_Produk(); // Memanggil fungsi Jumlah_Produk dari model
		$data['jumlah_transaksi'] = $this->M_Dashboard->Jumlah_Transaksi();
		$data['jumlah_customer'] = $this->M_Dashboard->Jumlah_Customer();
		$this->load->view('partials_admin/header',);
        $this->load->view('partials_admin/sidebar');
        $this->load->view('Admin/dashboard',$data);
        $this->load->view('partials_admin/footer');
	}
}