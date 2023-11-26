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

    public function get_data_by_harga($harga){
        $data = $this->M_produk->get_produk_by_harga($harga)->result_array();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    public function insert_data(){ 
        $data = array(
            'namaProduk' => 'Kaos Pria',
            'harga' => 5000,
            'jumlah' => 7
            );
        $this->M_produk->insert_produk($data);

        if($this->db->affected_rows()){
            echo "Data berhasil disimpan";
        }else{
            echo "Data gagal disimpan";
        }
    }

    public function update_data(){ 
        $data = array(
            'namaProduk' => 'Kaos Pria Polos',
            'harga' => 5000,
            'jumlah' => 7
            );
        $this->M_produk->update_produk($data, 4);

        if($this->db->affected_rows()){
            echo "Data berhasil diubah";
        }else{
            echo "Data gagal diubah";
        }
    }

    public function hapus_data(){ 
        $this->M_produk->hapus_produk(4);

        if($this->db->affected_rows()){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
    }
}
?>