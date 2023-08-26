<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('partials_admin/header',);
        $this->load->view('partials_admin/sidebar');
        $this->load->view('Admin/dashboard');
        $this->load->view('partials_admin/footer');
	}
}