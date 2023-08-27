<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_Dashboard extends CI_Model{
    
    public function Jumlah_Produk()
    {
        // Mendapatkan jumlah data produk
        $productCount = $this->db->count_all_results('product');
        return $productCount;
    }

    public function Jumlah_Transaksi()
    {
        // Mendapatkan jumlah data produk
        $transaksiCount = $this->db->count_all_results('transaksi');
        return $transaksiCount;
    }

    public function Jumlah_Customer()
    {
        // Mendapatkan jumlah data produk
        $customerCount = $this->db->count_all_results('customer');
        return $customerCount;
    }

}