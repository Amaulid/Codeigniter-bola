<?php

class data_lapang extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_lapang');
                $this->load->helper('url');
	}
 
	function index()
	{
		$data['user'] = $this->model_lapang->tampil_data()->result();
		$this->load->view('templates_pengunjung/header');
		$this->load->view('data_lapang',$data);
		$this->load->view('templates_pengunjung/footer');
	}
}