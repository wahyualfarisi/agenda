<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrintAgenda extends CI_Controller{
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
    $data['title'] = 'Print Agenda';
    $this->load->view('include/header', $data);
    $this->load->view('v_form_laporan');
    $this->load->view('include/footer');
  }
  function actionReport()
  {
    //$this->load->library('MC_TABLE');
    $this->load->library('pdf/fpdf');
    $this->load->library('MC_TABLE');
    $pdf=new MC_Table("L","mm","legal");
    $pdf->addPage();
    $pdf->SetMargins(1,1,1);
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial','B',11);
    $pdf->Image('assets/img/setwapres.png',6,6,20,20);
    $pdf->SetX(40);
    $pdf->MultiCell(70.5,0.5,'Sekretariat Wakil Presiden',0,'L');
    $pdf->SetFont('Helvetica','BI',7);
    $pdf->SetX(40);
    $pdf->MultiCell(70.5,10.5,'Perihal: Surat Masuk ',0,'L');
    $pdf->SetFont('Arial','',10);

    //------------------- GARIS ATAS -------->
        $pdf->Line(1,30.8,350.6,30.8);
        $pdf->SetLineWidth(0.9);

        $pdf->Line(1,31.8,350.6,31.8);
        $pdf->SetLineWidth(0,6);
    //------------------- GARIS ATAS -------->

    $pdf->ln(5);
    //Table with 20 rows and 4 columns

    $pdf->SetWidths(array(34,55,45,50,80,85));
      $pdf->Ln();

        $pdf->Row(array(
                    array("Tanggal"),
                    array("No. Agenda"),
                    array("Diterima Dari"),
                    array("No. Tanggal Surat/Memo"),
                    array("Hal"),
                    array("Disposisi")

        ));
        if($_POST['Cari']){
          $date1 = $_POST['date1'];
          $date2 = $_POST['date2'];
          $jenis_surat = $_POST['jenis_surat'];

        foreach($this->model_agenda->printSurat($date1, $date2, $jenis_surat)->result() as $key ):

        $pdf->Row(array(
                    array(date("d/F/Y", strtotime($key->tanggal) )),
                    array(strip_tags(str_replace("&nbsp;"," ", $key->no_agenda) )),
                    array(strip_tags(str_replace("&nbsp;"," ", $key->no_surat_memo) )),
                    array(strip_tags(str_replace("&nbsp;"," ", $key->diterima) )),
                    array(strip_tags(str_replace("&nbsp;"," ", $key->hal) )),
                    array(strip_tags(str_replace("&nbsp;"," ", $key->disposisi) ))

        ));
      endforeach;
    }
    //$pdf->MultiCell(70.5,0.5,'Sekretariat Wakil Presiden',0,'L');

    $pdf->output();
  }


}
