<?php

class model_member extends CI_Model{
	function tampil_data(){
		return $this->db->get('tb_user');
	}
}