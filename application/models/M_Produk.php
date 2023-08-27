<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Produk extends CI_Model{

       
    public function show_data()
    {
        return $this->db->get('product')->result();
    }
	}