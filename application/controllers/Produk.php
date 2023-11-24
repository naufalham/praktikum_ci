<?php
class Produk extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk');
    }

    public function get_data(){
        $data = $this->M_produk->get_produk()->result_array();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}
?>