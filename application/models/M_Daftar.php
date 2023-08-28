<?php
class M_Daftar extends CI_Model {
    public function insert_data($data) {
        return $this->db->insert('member', $data);
    }
}
?>
