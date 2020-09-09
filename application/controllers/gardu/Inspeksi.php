<?php
/**
 *
 */
class Inspeksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data'); // jika ingin di jalan kan semua method
	}
  
  public function index()
  {
  	// LOAD MODEL
  	// $this->load->model('M_data'); // jika hanya di jalankan di method function index()
  	$data['tb_pelaksana'] = $this->M_data->ambil_data();

    $data['judul'] = "Rekam Seluruh Data";
    $data['nama'] = "Risna Julianti";
    $data['imgusr'] = base_url("assets/template/")."dist/img/avatar2.png";
    $this->load->view('templates/header', $data);
    $this->load->view('Gardu/inspeksi/index', $data);
    $this->load->view('templates/footer');
  }
}
