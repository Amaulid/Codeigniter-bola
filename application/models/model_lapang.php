<?php

class model_lapang extends CI_Model{
	function tampil_data(){
		return $this->db->get('tb_lapang');
	}

	public function tambah_lapang($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_lapang($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function update_lapang($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_lapang($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}