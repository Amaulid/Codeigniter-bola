<?php

class Data_bookingan_member extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_pembookingan');
                $this->load->helper('url');
	}
 
	function index(){
		$data['tb_pemesanan'] = $this->model_pembookingan->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_booking_member', $data);
		$this->load->view('templates/footer');
	}
}