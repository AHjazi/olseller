<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Produk extends CI_Controller {

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
		$this->load->model('M_Produk');
		$data['product'] = $this->M_Produk->show_data();
		$this->load->view('partials_admin/header',);
        $this->load->view('partials_admin/sidebar');
        $this->load->view('Produk/list_produk',$data);
        $this->load->view('partials_admin/footer');
	}

	public function Tambah_Produk()
	{
		$this->load->view('partials_admin/header');
        $this->load->view('partials_admin/sidebar');
        $this->load->view('Produk/tambah_produk');
        $this->load->view('partials_admin/footer');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_product','user_id','kategori','nama','deskripsi','harga','stok','gambar','createdAt','updatedAt','required');
		
	}

	public function tambah_data_aksi()
	{
		$this->load->model('M_Produk');
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			// $this->tambah();
		}else{
			$id_product	  	  = $this->input->post('id_product');
			$user_id 	 	  = $this->input->post('user_id');
			$kategori 	 	  = $this->input->post('kategori');
			$nama 	 	 	  = $this->input->post('nama');
			$deskripsi 	 	  = $this->input->post('deskripsi');
			$harga 	 	  = $this->input->post('harga');
			$stok 	 	  = $this->input->post('stok');
			$gambar 	 	  = $this->input->post('gambar');
			$createdAt 	 	  = $this->input->post('createdAt');
			$updatedAt 	 	  = $this->input->post('updatedAt');
			
			$data = array(
				'id_product'		=> $id_product,
				'user_id'	=> $user_id,
				'kategori'	=> $kategori,
				'nama'	=> $nama,
				'deskripsi'	=> $deskripsi,
				'harga'	=> $harga,
				'stok'	=> $stok,
				'gambar'	=> $gambar,
				'createdAt'	=> $createdAt,
				'updatedAt'	=> $updatedAt,

			);

			$this->M_Produk->insert_data($data, 'product');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('list_produk');
		}
	
	}
}