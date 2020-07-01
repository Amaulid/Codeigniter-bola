<?php

class Invoice extends CI_Controller{

		public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Anda Belum Login!
 					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   					 <span aria-hidden="true">&times;</span>
  					</button>
					</div>');
			redirect('auth/login');
		}
	}
	public function index()
	{
		$data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/invoice', $data);
		$this->load->view('templates_admin/footer');
	}
	public function detail($id_konfirm)
	{
		$data['detail'] = $this->model_invoice->ambil_id_konfirm($id_konfirm);
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_konfirm);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('templates_admin/footer');

	}

	public function hapus($id)
	{
		$where = array('id_konfirm' => $id);
		$this->model_invoice->hapus_data($where, 'tb_konfirmasi');
		redirect('admin/invoice/index');
	}
}

?>