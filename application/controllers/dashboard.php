<?php

class Dashboard extends CI_Controller{

		public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '2'){
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
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}


	public function pembayaran()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_pesanan()
	{
		$is_processed = $this->model_invoice->index();
		if($is_processed){
		$this->cart->destroy();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('proses_pesanan');
		$this->load->view('templates/footer');
	} else{
		echo "Maaf, Pesanan Anda Gagal diproses";
	}
	}

	public function detail($id_brg)
	{
		$data['lapang'] = $this->model_lapang->detail_lpg($id_lapang);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_lapang',$data);
		$this->load->view('templates/footer');
	}


}


?>