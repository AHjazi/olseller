<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$this->load->model('M_Transaksi');
		$data['get_joined_data'] = $this->M_Transaksi->get_joined_data();
		$this->load->view('partials_admin/header',);
        $this->load->view('partials_admin/sidebar');
        $this->load->view('Transaksi/transaksi',$data);
        $this->load->view('partials_admin/footer');
	}
}