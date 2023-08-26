<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function index()
	{
		$this->load->model('M_Customer');
		$data['customer'] = $this->M_Customer->show_data();
		$this->load->view('partials_admin/header',);
        $this->load->view('partials_admin/sidebar');
        $this->load->view('Customer/customer',$data);
        $this->load->view('partials_admin/footer');
	}
}