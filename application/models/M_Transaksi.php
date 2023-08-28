<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Transaksi extends CI_Model{

       
        public function get_joined_data() {
            $sql = "
                SELECT
                    p.`nama`, p.`kategori`, dt.`qty`, p.`harga`, p.`stok`,
                    t.`total`, t.`status`, dt.`createdAt`, dt.`updatedAt`
                FROM
                    `detail_trans` AS dt
                INNER JOIN
                    `product` AS p ON dt.`id_product` = p.`id_product`
                INNER JOIN
                    `transaksi` AS t ON dt.`id_transaksi` = t.`id_transaksi`
            ";
    
            $query = $this->db->query($sql);
            return $query->result(); // Return the fetched data
        }
        public function get_data_by_date_range($minDateFormatted, $maxDateFormatted)
        {
            $this->db->select('p.nama, p.kategori, dt.qty, p.harga, p.stok, t.total, t.status, dt.createdAt, dt.updatedAt');
            $this->db->from('detail_trans AS dt');
            $this->db->join('product AS p', 'dt.id_product = p.id_product');
            $this->db->join('transaksi AS t', 'dt.id_transaksi = t.id_transaksi');
            $this->db->where('dt.createdAt >=', $minDateFormatted);
            $this->db->where('dt.createdAt <=', $maxDateFormatted);
            
            $query = $this->db->get(); // Execute the query
            
            return $query->result(); // Return the fetched data
        }
        


	}