<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class M_data extends CI_Model
{
	function ambil_data()
	{
        // return $this->db->get('tb_pelaksana');
		$query = $this->db->get('tb_pelaksana');
		return $query->result_array();
	}

	function joindata() 
	{
		$this->db->select("tb_pelaksana.id_gardu, tb_pelaksana.tanggal, tb_pelaksana.penyulang, tb_pelaksana.kapasitas, tb_pelaksana.lokasi,
		tb_trafo.tahunpembuatan, tb_trafo.merk");
		$this->db->from("tb_pelaksana");
		$this->db->join("tb_trafo", "tb_trafo.id_gardu = tb_pelaksana.id_gardu");

		// $queryJoin = "SELECT `tb_pelaksana`.`id_gardu`, `tb_pelaksana`.`tanggal`, `tb_pelaksana`.`penyulang`, `tb_pelaksana`.`kapasitas`, `tb_pelaksana`.`lokasi`, `tb_trafo`.`tahunpembuatan`, `tb_trafo`.`merk`
		// 			FROM `tb_pelaksana`
		// 			JOIN `tb_trafo`
		// 			ON `tb_trafo`.`id_gardu` = `tb_pelaksana`.`id_gardu`";
		// $join = $this->db->query($queryJoin)->result_array();
		// return $join;
		return $this->db->get()->result_array();
	}
}