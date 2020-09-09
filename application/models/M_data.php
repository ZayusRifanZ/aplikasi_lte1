<?php 
 
class M_data extends CI_Model
{
	function ambil_data()
	{
        // return $this->db->get('tb_pelaksana');
		$query = $this->db->get('tb_pelaksana');
		return $query->result_array();
	}
	
}
	function ambil_data()
	{
        // return $this->db->get('tb_pemeriksa');
		$query = $this->db->get('tb_pemeriksa');
		return $query->result_array();
	}