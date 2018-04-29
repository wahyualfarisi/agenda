<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    $this->load->library('session');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = 'Halaman Login';
    $this->load->view('v_login', $data);
  }

  function aksi_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username' => $username,
      'password' => md5($password)
    );

    $cek = $this->m_login->cek_login('admin', $where)->num_rows();
    if($cek > 0 ){
      $data_session = array(
        'nama' => $username,
        'status' => "login"
      );

      $this->session->set_userdata($data_session);
      redirect('agenda');
    }else{
      $this->session->set_flashdata('msg', 'Password salah');
      redirect('login');
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url('login'));
  }

}
