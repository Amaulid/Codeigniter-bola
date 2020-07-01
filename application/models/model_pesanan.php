<?php

class Model_pesanan extends CI_Model{
	
	public function tampil_data()
	{
		return $this->db->get('tb_pemesanan');
	}

	function dTgl(){
	return $this->db->get_where('tb_pemesanan',['id_jam'=>$this->input->post('id_jam'),'tgl_jadwal'=>$this->input->post('tgl_jadwal'),'id_lapang'=>$this->input->post('id_lapang')]); // sesuaikan nama tabel
	}	

	function isiJadwal()
	{
	$this->db->insert('tb_pemesanan',$_POST); // sesuaikan nama tabel
	}
}
?>