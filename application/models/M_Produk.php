<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Produk extends CI_Model{

       
    public function show_data()
    {
        return $this->db->get('product')->result();
    }
    public function get_data($table){
        return $this->db->get($table);
    }

    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function update_data($table,$data,$where){
        $this->db->update($table,$data,$where);
    }

    public function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
	}