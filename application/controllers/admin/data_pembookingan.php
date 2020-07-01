<?php

class Data_pembookingan extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_pembookingan');
                $this->load->helper('url');
	}
 
	function index(){
		$data['tb_pemesanan'] = $this->model_pembookingan->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_booking', $data);
		$this->load->view('templates_admin/footer');
	}

	public function hapus($id)
	{
		$where = array('id_pemesanan' => $id);
		$this->model_pembookingan->hapus_data($where, 'tb_pemesanan');
		redirect('admin/data_pembookingan/index');
	}
}


?>