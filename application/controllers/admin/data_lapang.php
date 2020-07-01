<?php

class Data_lapang extends CI_Controller{

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
		$data['lapang'] = $this->model_lapang->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_lapang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$id_lapang		= $this->input->post('id_lapang');
		$keterangan		= $this->input->post('keterangan');
		$harga			= $this->input->post('harga');
		$gambar			= $_FILES['gambar']['name'];
			if($gambar = ''){}else{
				$config ['upload_path'] 	= './upload';
				$config ['allowed_types'] 	= 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')){
					echo "Gambar Gagal diUpload !";
				}else{
					$gambar=$this->upload->data('file_name');
				}
			}

			$data = array(
				'id_lapang'		=> $id_lapang,
				'keterangan'	=> $keterangan,
				'harga'			=> $harga,
				'gambar'		=> $gambar
			);

			$this->model_lapang->tambah_lapang($data, 'tb_lapang');
			redirect('admin/data_lapang/index');

	}

	public function edit($id)
	{
		$where = array('id_lapang' =>$id);
		$data['lapang'] = $this->model_lapang->edit_lapang($where, 'tb_lapang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_lapang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$keterangan 	= $this->input->post('keterangan');
		$harga	 		= $this->input->post('harga'); 

		$data = array(
			'keterangan'	=> $keterangan,
			'harga'			=> $harga
		);

		$where = array(
			'id_lapang' 	=> $id_lapang
		);

		$this->model_lapang->update_lapang($where,$data, 'tb_lapang');
		redirect('admin/data_lapang/index');
	}

	public function hapus($id)
	{
		$where = array('id_lapang' => $id);
		$this->model_lapang->hapus_lapang($where, 'tb_lapang');
		redirect('admin/data_lapang/index');
	}
}