<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
  }
  function tb_pelaksana(){
		$data['tb_pelaksana'] = $this->m_data->ambil_data()->result();
		$this->load->view('Gardu/inspeksi/index.php',$data);
  }
  function tb_inspeksi(){
		$data['tb_inspeksi'] = $this->m_data->ambil_data()->result();
		$this->load->view('Gardu/inspeksi/index2.php',$data);
	}
  public function index ()
  {
    $data['judul'] = "Dashboard";
    $data['nama'] = "Risna Julianti";
    $data['imgusr'] = base_url("assets/template/")."dist/img/avatar2.png";
    $this->load->view('templates/header', $data);
    $this->load->view('Dashboard/index', $data);
    $this->load->view('templates/footer');
    // $this->load->view('templates/adminLte');
  }
}
