<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratHariIni extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_agenda');
    $this->load->library('session');
    if($this->session->userdata('status') != 'login' ){
      redirect(base_url('login') );
    }
    //Codeigniter : Write Less Do More
  }
  function index()
  {
    $title['title'] = 'Surat Hari ini';
    $this->load->view('include/header', $title);
    $data['surat'] = $this->model_agenda->getAllSuratHariini()->result();
    $this->load->view('v_surat_hariini', $data);
    $this->load->view('include/footer');
  }

}
