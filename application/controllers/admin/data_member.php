<?php

class Data_member extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_member');
                $this->load->helper('url');
	}
 
	function index(){
		$data['user'] = $this->model_member->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_user', $data);
		$this->load->view('templates_admin/footer');
	}

	public function hapus($id)
	{
		$where = array('id_user' => $id);
		$this->model_member->hapus_data($where, 'tb_user');
		redirect('admin/data_user/index');
	}
}


?>