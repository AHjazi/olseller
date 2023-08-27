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

    public function edit_produk($id)
{
    return $this->db->get_where('product', ['id_product' => $id])->row_array();
}

    public function update_data($table,$data,$where){
        $this->db->update($table,$data,$where);
    }

    public function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function get_total($conn) {
        $query = "SELECT COUNT(*) AS jumlah FROM product";
        $hasil = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_array($hasil)) {
            $jumlah = $data['jumlah'];
        }
    
        return $jumlah;
    }

	}