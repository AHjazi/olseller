<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	
	public function Tambah_Produk()
	{
		// var_dump($data);exit;
		$this->load->view('partials/header');
        $this->load->view('partials/sidebar');
        $this->load->view('Produk/tambah_produk');
        $this->load->view('partials/footer');
	}
}