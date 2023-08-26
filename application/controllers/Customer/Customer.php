<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function index()
	{
		$this->load->view('partials_admin/header',);
        $this->load->view('partials_admin/sidebar');
        $this->load->view('Customer/customer');
        $this->load->view('partials_admin/footer');
	}
}