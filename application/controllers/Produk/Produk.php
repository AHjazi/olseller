<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	
	public function Tambah_Produk()
	{
		$this->load->view('partials_admin/header');
        $this->load->view('partials_admin/sidebar');
        $this->load->view('Produk/tambah_produk');
        $this->load->view('partials_admin/footer');
	}
}