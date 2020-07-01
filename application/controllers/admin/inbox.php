<?php

class Inbox extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_kontak');
                $this->load->helper('url');
	}
 
	function index(){
		$data['user'] = $this->model_kontak->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/inbox', $data);
		$this->load->view('templates_admin/footer');
	}

		public function hapus($id)
	{
		$where = array('id_inbox' => $id);
		$this->model_kontak->hapus_data($where, 'tb_inbox');
		redirect('admin/inbox/index');
	}
}

?>