<?php

class Model_pembookingan extends CI_Model{
	function tampil_data(){
		return $this->db->get('tb_pemesanan');
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}