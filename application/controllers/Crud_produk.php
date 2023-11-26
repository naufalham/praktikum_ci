<?php
class Crud_produk extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk');
    }

    public function index()
	{
		$data['produk'] = $this->M_produk->get_produk()->result_array();
        $this->load->view('produk/main_produk',$data);
	}

    public function tambah_produk()
    {
        $this->load->view('produk/form_tambah');
    }

    public function aksi_simpan(){
        $namaProduk = $this->input->post('namaProduk');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $data = array(
            'namaProduk' => $namaProduk,
            'harga' => $harga,
            'jumlah' => $jumlah
            );
        $this->M_produk->insert_produk($data);

        if($this->db->affected_rows()){
            echo ('crud_produk');
        }else{
            echo ('crud_produk/tambah_produk');
        }
    }

    public function edit($idProduk){
        $data['produk'] = $this->M_produk->get_data_by_id($idProduk)->row_array();
        $this->load->view('produk/form_edit', $data);
    }

    public function aksi_edit(){
        $idProduk = $this->input->post('idProduk');
        $namaProduk = $this->input->post('namaProduk');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $data = array(
            'namaProduk' => $namaProduk,
            'harga' => $harga,
            'jumlah' => $jumlah
            );
        $this->M_produk->update_produk($data, $idProduk);

        if($this->db->affected_rows()){
            redirect ('crud_produk');
        }else{
            redirect ('crud_produk/edit/'.$idProduk);
        }
    }

    public function hapus($idProduk){
        $this->M_produk->hapus_produk($idProduk);

        if($this->db->affected_rows()){
            redirect ('crud_produk');
        }else{
            echo "Data gagal dihapus";
        }
    }
}