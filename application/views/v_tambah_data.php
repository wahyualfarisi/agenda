<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <img src="<?= base_url().'assets/img/setwapres.png' ?>" width="50px" >
           Tambah Surat Masuk / Surat Keluar <small>Sekretariat Wakil Presiden</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Layout</a></li>
      <li class="active">Fixed</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- isi -->
    <div class="box box-danger">

            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-circle-o text-yellow"></i> Tambah Data Agenda</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                  <?php if($this->session->flashdata('message')){ ?>
                <div class="alert alert-success" id="notifications"><?php echo $this->session->flashdata('message'); ?></div>
              <? } ?>
                <form action="<?= site_url('tambahdata/addaction') ?>" method="post">

                  <div class="col-xs-6">
                    <label>Jenis Surat</label>
                    <select class="form-control" name="jenis_surat">
                      <option value="in">Surat Masuk</option>
                      <option value="out">Surat Keluar</option>
                    </select>
                  </div>
                  <div class="col-xs-3">
                    <label>TANGGAL</label>
                    <input type="date" class="form-control input-lg" name="tanggal" placeholder="Tanggal" required>
                  </div>

                  <div class="col-xs-9">
                    <label>NO. AGENDA</label>
                    <input type="text" class="form-control input-lg" name="no_agenda"  placeholder="Isi Nomor Agenda" required>
                  </div>

                  <div class="col-xs-6">
                    <label>DITERIMA DARI</label>
                    <input type="text" class="form-control input-lg" name="diterima" placeholder="Diterima Dari" required >
                  </div>

                  <div class="col-xs-6">
                    <label>NO & TANGGAL SURAT/MEMO</label>
                  <textarea id="tinytextarea" name="no_surat_memo" class="form-control" ></textarea>
                  </div>



                  <div class="col-xs-6">
                    <label>HAL</label>
                  <textarea id="tinytextarea1" class="form-control" name="perihal"></textarea>
                  </div>

                  <div class="col-xs-6">
                    <label>PETUNJUK/DISPOSISI</label>
                  <textarea id="tinytextarea2" class="form-control" name="disposisi"></textarea>
                  </div>
              </div>

                  <div class="box-footer">
                    <input type="submit" name="Simpan" class="btn btn-info pull-right" value="SAVE" >
                  </div>
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-circle-o text-red"></i> Data Agenda Yang di Tambahkan</h3>

              <div class="box-tools">
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Tanggal</th>
                  <th>No Agenda</th>
                  <th>No Surat Memo</th>
                  <th>Diterima Dari</th>
                  <th>Hal</th>
                  <th>Disposisi</th>
                  <th>Jenis Surat</th>
                  <th></th>
                </tr>
                <?php
                foreach($desc as $row):
                if($row->jenis_surat=='in'){
                  $jenis_surat = 'Surat Masuk';
                }else{
                  $jenis_surat = 'Surat Keluar';
                }
                   ?>
                <tr>
                <td><?= $row->tanggal ?></td>
                <td><?= $row->no_agenda ?></td>
                <td><?= $row->diterima ?></td>
                <td><?= $row->no_surat_memo ?></td>
                <td><?= $row->hal ?></td>
                <td><?= $row->disposisi ?></td>
                <td><?= $jenis_surat ?></td>


                </tr>
                  <?php endforeach; ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
