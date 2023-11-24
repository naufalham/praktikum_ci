<?php
class M_produk extends CI_Model{

    public function get_produk(){
        return $this->db->get('tbl_produk');
        //perintah diatas sama seperti "select * from tbl_produk"
    }

}
?>