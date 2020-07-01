<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_proses extends CI_Model{
 
  public function view(){
    return $this->db->get('tb_konfirmasi')->result();
  }
  
  // Fungsi untuk melakukan proses upload file
  public function upload(){
    $config['upload_path'] = './upload/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '2048';
    $config['remove_space'] = TRUE;
  
    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
  
  // Fungsi untuk menyimpan data ke database
  public function save($upload){
    $data = array(
      'nama'    => $this->input->post('nama'),
      'harga'  => $this->input->post('harga'),
      'gambar' => $upload['file']['file_name']     
    );
    
    $this->db->insert('tb_konfirmasi', $data);
  }
}
