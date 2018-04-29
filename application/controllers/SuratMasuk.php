<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratMasuk extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_agenda');
    $this->load->library('session');

    if($this->session->userdata('status') != 'login' ){
      redirect(base_url('login'));
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    //hitung jumlah surat Masuk
    $data['surat_masuk'] = $this->model_agenda->hitungSuratMasuk();
    //title
    $data['title']  = 'Surat Masuk';
    $this->load->view('include/header', $data);
    $data['user'] = $this->model_agenda->getAllSuratMasuk()->result();
    $this->load->view('v_surat_masuk', $data);
    $this->load->view('include/footer');
  }
  function edit($id)
  {
    $where = array('id_agenda' =>$id);
    $data['surat'] = $this->model_agenda->edit_data($where)->result();
    $this->load->view('include/header');
    $this->load->view('v_edit_data', $data);
    $this->load->view('include/footer.php');
  }
  function update()
  {
    $id           = $this->input->post('id_agenda');
    $tanggal      = $this->input->post('tanggal');
    $no_agenda    = $this->input->post('no_agenda');
    $diterima     = $this->input->post('diterima');
    $no_surat_memo = $this->input->post('no_surat_memo');
    $hal           = $this->input->post('perihal');
    $disposisi     = $this->input->post('disposisi');
    $jenis_surat  = $this->input->post('jenis_surat');

    $data = array(
      'tanggal' => $tanggal,
      'no_agenda' => $no_agenda,
      'diterima'  => $diterima,
      'no_surat_memo' => $no_surat_memo,
      'hal' => $hal,
      'disposisi' => $disposisi,
      'jenis_surat' => $jenis_surat
    );

    $where = array(
      'id_agenda' => $id
    );

    $this->model_agenda->update_data($where, $data);
    if($data){
      echo $this->session->set_flashdata('message', 'Berhasil Merubah Data');
      redirect('suratmasuk');
    }else{
      echo $this->session->set_flashdata('message' , 'Ada Kesalahan');
      redirect('edit');
    }

  }

  function hapus($id)
  {
    $where = array('id_agenda' => $id );
    $hasil = $this->model_agenda->hapus_data($where);
    redirect('suratmasuk');
  }


}
