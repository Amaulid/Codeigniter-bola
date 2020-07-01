<?php 

class Proses extends CI_Controller{

function __construct(){
		parent::__construct();		
		$this->load->model('model_proses');
                $this->load->helper('url');
	}
 
  public function index(){
    $this->load->view('templates/header');
    $this->load->view('proses_pesanan');
    $this->load->view('templates/footer');
  }
  
  public function tambah(){
    $data = array();
    
    if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di model_proses.php
      $upload = $this->model_proses->upload();
      
      if($upload['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di model_proses.php untuk menyimpan data ke database
        $this->model_proses->save($upload);
        
        redirect('dashboard'); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
    
    $this->load->view('proses_pesanan', $data);
  }
}


?>