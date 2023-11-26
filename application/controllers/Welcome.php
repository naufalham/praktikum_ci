<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 function __construct(){
		parent::__construct();
		//memanggil helper HTML
		$this->load->helper('html');
		//memanggil library from validation
		$this->load->library('form_validation');
	 }

	

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function heading(){
		$this->load->view('heading.php');
	}

	public function about($nama){
		echo "<h1>Halaman About</h1>";
		echo "<hr>";
		echo "Nama saya = ". $nama;
	}

	public function tgl_indonesia(){
		$this->load->helper('tgl_indo');
		$tgl= date("Y-m-d H:i:s");
		echo tgl_ind($tgl);
	 }

	public function kalkulator(){
		$this->load->view('form_kalkulator');
	}

	public function aksi_kalkulator(){
		$angka1 = $this->input->post('angka1');
		$angka2 = $this->input->post('angka2');
		$operasi = $this->input->post('operasi');
		$this->form_validation->set_rules('angka1','Angka 1','required|numeric');
		$this->form_validation->set_rules('angka2','Angka 2','required|numeric');
		if($this->form_validation->run() != false){
		switch ($operasi){
			case "penjumplahan":
				$hasil = $angka1+$angka2;
				echo "Hasil Penjumplahan Antara ".$angka1." + ".angka2." adalah = ".$hasil;echo "<hr>";
				echo "<a href=".site_url('welcome/kalkulator').">Kembali ke form perhitungan</a>";
				break;
			case "pengurangan":
				$hasil = $angka1-$angka2;
				echo "Hasil pengurangan Antara ".$angka1." - ".angka2." adalah = ".$hasil;echo "<hr>";
				echo "<a href=".site_url('welcome/kalkulator').">Kembali ke form perhitungan</a>";
				break;
			case "perkalian":
				$hasil = $angka1*$angka2;
				echo "Hasil perkalian Antara ".$angka1." * ".angka2." adalah = ".$hasil;echo "<hr>";
				echo "<a href=".site_url('welcome/kalkulator').">Kembali ke form perhitungan</a>";
				break;		
			case "pembagian":
				$hasil = $angka1/$angka2;
				echo "Hasil pembagian Antara ".$angka1." / ".angka2." adalah = ".$hasil;echo "<hr>";
				echo "<a href=".site_url('welcome/kalkulator').">Kembali ke form perhitungan</a>";
				break;
		}
		}else{
			$this->load->view('form_kalkulator');
		}
	}

	public function upload_file()
	{
		$this->load->view('form_upload');
	}

	public function aksi_upload()
	{
		$config['upload_path']		='./uploads/';
		$config['allowed_types']	='gif|jpg|png';
		$config['max_size']			=100; //ukuran max
		$config['max_width']		=1024; //lebar max
		$config['max_height']		=768; //tinggi max

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('form_upload', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('sukses_upload', $data);
		}
	}
}
