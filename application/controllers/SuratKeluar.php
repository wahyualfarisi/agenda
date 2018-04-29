<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratKeluar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_agenda');
    $this->load->library('session');
    //Codeigniter : Write Less Do More
    if($this->session->userdata('status' != 'login') ){
      redirect(base_url('login') );
    }
  }

  function index()
  {
    $data['surat'] = $this->model_agenda->hitungSuratKeluar();
    $data['title'] = 'Surat Keluar';
    $this->load->view('include/header', $data);
    $data['suratkeluar'] = $this->model_agenda->getAllSuratKeluar()->result();
    $this->load->view('v_surat_keluar', $data);
    $this->load->view('include/footer');
  }
  function edit($id)
  {
    $where = array('id_agenda' => $id);
    $data['surat'] = $this->model_agenda->edit_data($where)->result();
    $this->load->view('v_edit_data',$data);
  }

}
