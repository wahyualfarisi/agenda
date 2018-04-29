<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambahdata extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_agenda');
    $this->load->library('session');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $title['title'] = 'Tambah Data';
    $this->load->view('include/header', $title);
    $data['desc'] = $this->model_agenda->getDesc()->result();
    $this->load->view('v_tambah_data', $data);
    $this->load->view('include/footer');
  }

  function addaction()
  {

    $tanggal        = $this->input->post('tanggal');
    $no_agenda      = $this->input->post('no_agenda');
    $diterima       = $this->input->post('diterima');
    $no_surat_memo  = $this->input->post('no_surat_memo');
    $perihal        = $this->input->post('perihal');
    $disposisi      = $this->input->post('disposisi');
    $jenis_surat    = $this->input->post('jenis_surat');
    $data = array(
        'tanggal' => $tanggal,
        'no_agenda' => $no_agenda,
        'diterima' => $diterima,
        'no_surat_memo' => $no_surat_memo,
        'hal' => $perihal,
        'disposisi' => $disposisi,
        'jenis_surat' => $jenis_surat
    );

    $this->model_agenda->addSurat($data, 'my_agenda');
    if($data >=1 ){
      echo $this->session->set_flashdata('message', 'Berhasil Menambahkan');
      redirect('tambahdata');
    }else{
      echo $this->session->set_flashdata('message', 'Gagal Menambahkan');
    }
  }

}
