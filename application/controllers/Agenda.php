<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller{

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
    $data['title'] = 'Hallo';
    $this->load->view('include/header', $data);
    $this->load->view('v_agenda');
    $this->load->view('include/footer');
  }

}
