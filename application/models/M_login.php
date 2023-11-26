<?php
class M_login  extends CI_Model{
    public function cek_admin($u, $p){
        return $this->db->get_where('tbl_admin', array('userName'=>$u, 'password'=>$p));
    }
}