<?php

class Kontak extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_kontak');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['kontak'] = $this->model_kontak->tampil_data()->result();
		$this->load->view('templates_pengunjung/header');
		$this->load->view('kontak',$data);
		$this->load->view('templates_pengunjung/footer');
	}
 
	function tambah_aksi(){
		$this->form_validation->set_rules('nama','Nama','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		 		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', array(
                'required'      => '%s harus diisi.'
        )
	);
		 		$this->form_validation->set_rules('pesan','Pesan','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		if($this->form_validation->run() == FALSE) {
		$this->load->view('templates_pengunjung/header');
		$this->load->view('kontak');
		$this->load->view('templates_pengunjung/footer');
	}else {
		$data = array(
				'id_inbox'		=> '',
				'nama'			=> $this->input->post('nama'),
				'email'			=> $this->input->post('email'),
				'pesan'			=> $this->input->post('pesan'),
			);
		$this->model_kontak->input_data($data,'tb_inbox');
		$this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima Kasih Telah Menghubungi kami.</div>");
		redirect('kontak/index');

		
	}
}

}
?>




