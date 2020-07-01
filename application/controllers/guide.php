<?php

class Guide extends CI_Controller{

	public function index()
	{
		$this->load->view('templates_pengunjung/header');
		$this->load->view('guide');
		$this->load->view('templates_pengunjung/footer');
	}
}