<?php

class Model_invoice extends CI_Model{
public function tampil_data()
	{
		$result = $this->db->get('tb_konfirmasi');
		if ($result->num_rows() > 0) {
			return $result->result();
		}else{
			return false;
		}
	}

	public function ambil_id_konfirm($id_konfirm)
	{
		$result = $this->db->where('id_konfirm', $id_konfirm)->limit(1)->get('tb_konfirmasi');
		if($result->num_rows() > 0){
			return $result->row();
		}else {
			return false;
		}
	}

	public function ambil_id_pesanan($id_konfirm)
	{
		$result = $this->db->where('id_konfirm', $id_konfirm)->get('tb_pemesanan');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>