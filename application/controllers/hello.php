<?php
class Hello extends CI_Controller{
    public function index(){
        echo "<h2>Hello World!</h2>";
    }

	public function hello_by_model(){
		$this->load->model('Hello_model');
		$data = $this->Hello_model->get_hello();
		echo "<h2>".$data."</h2>";
	}

	public function hello_by_view(){
		$this->load->view('Hello');
	}

	public function hello_by_mvc(){
		$this->load->model('Hello_model');
		$data['Hello'] = $this->Hello_model->get_hello();
		$this->load->view('hello_mvc', $data);
	}
}
?>
