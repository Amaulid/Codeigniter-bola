<?php

class Data_bookingan extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_pembookingan');
                $this->load->helper('url');
	}
 
	function index(){
		$data['tb_pemesanan'] = $this->model_pembookingan->tampil_data()->result();
		$this->load->view('templates_pengunjung/header');
		$this->load->view('templates_pengunjung/sidebar');
		$this->load->view('data_booking', $data);
		$this->load->view('templates_pengunjung/footer');
	}
}