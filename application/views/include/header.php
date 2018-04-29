
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title;  ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/bootstrap/dist/css/bootstrap.min.css'?> ">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url().'assets/bower_components/font-awesome/css/font-awesome.min.css'?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url().'assets/bower_components/Ionicons/css/ionicons.min.css' ?> ">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url().'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url().'assets/dist/css/skins/_all-skins.min.css' ?>">
  <link rel="stylesheet" type="<?= base_url().'text/css" href="assets/css/sweetalert.css' ?>">
  <link rel="stylesheet" href="<?= base_url().'assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css' ?>">
  <style media="screen">
  #notifications {
      cursor: pointer;
      position: fixed;
      right: 0px;
      z-index: 9999;
      bottom: 0px;
      margin-bottom: 22px;
      margin-right: 15px;
      min-width: 300px;
      max-width: 800px;
}
  </style>

  <script src="<?= base_url().'assets/tinymce/js/tinymce/tinymce.min.js'?>"></script>
  <script>
  tinymce.init({
    selector:'#tinytextarea',
    plugins: 'code,codesample,jbimages',
    toolbar: 'bold'
  });
  tinymce.init({
    selector:'#tinytextarea1',
    plugins: 'code,codesample,jbimages',
    toolbar: 'bold'
  });
  tinymce.init({
    selector:'#tinytextarea2',
    plugins: 'code,codesample,jbimages',
    toolbar: 'bold'
  });
  </script>

</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b><img src="img/setwapres.png" width="30px" alt="">  </b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>AGENDA</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="<?= site_url('login/logout') ?>" onclick="return confirm('Anda ingin keluar ? ')">
              <img src="<?= base_url().'assets/img/setwapres.png' ?>" width="20px">
              <span class="hidden-xs"><i>Hallo <?= $this->session->userdata('nama') ?>, Logout</i></span>
            </a>

          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- =============================================== -->
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <a href="<?= site_url('tambahdata') ?>" class="fa fa-plus btn btn-warning btn-lg btn-block margin-bottom text-black"> Tambah Data Agenda</a>
        <li class="header text-white">Menu</li>
        <li >
          <a href="<?= site_url('SuratMasuk')?>"><i class="glyphicon glyphicon-envelope"></i> <span> Surat Masuk </span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('SuratKeluar') ?>"><i class="glyphicon glyphicon-envelope"></i> <span> Surat Keluar </span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?= site_url('SuratHariIni') ?>"><i class="glyphicon glyphicon-envelope"></i> <span> Surat Hari ini</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('PrintAgenda') ?>"><i class="fa fa-print"></i> <span> Print Agenda</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow"></small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->
