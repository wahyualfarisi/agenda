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
                <?php
                foreach($surat as $key):
                 ?>
                <form action="<?= site_url('suratmasuk/update') ?>" method="post">
                  <input type="hidden" name="id_agenda" value="<?= $key->id_agenda  ?>">
                  <div class="col-xs-6">
                    <label>Jenis Surat</label>
                    <select class="form-control" name="jenis_surat">
                    <?php
                    for($i=0; $i<=2; $i++){
                      if($i==1){
                        $value = 'in';
                        $arti  = 'Surat Masuk';
                      }else if($i==2){
                        $value = 'out';
                        $arti  = 'Surat Keluar';
                      }else{
                        $value = '';
                        $arti  = '--pilih--';
                      }

                      if($key->jenis_surat == $value){
                        $sel = 'selected';
                      }else{
                        $sel = '';
                      }
                      echo "<option value='$value' $sel> $arti</option>";
                    }

                     ?>
                    </select>
                  </div>
                  <div class="col-xs-3">
                    <label>TANGGAL</label>
                    <input type="date" class="form-control input-lg" name="tanggal" placeholder="Tanggal" value="<?= $key->tanggal ?>" required>
                  </div>

                  <div class="col-xs-9">
                    <label>NO. AGENDA</label>
                    <input type="text" class="form-control input-lg" name="no_agenda"  placeholder="Isi Nomor Agenda" value="<?= $key->no_agenda ?>" required>
                  </div>

                  <div class="col-xs-6">
                    <label>DITERIMA DARI</label>
                    <input type="text" class="form-control input-lg" name="diterima" placeholder="Diterima Dari" value="<?= $key->diterima ?>" required >
                  </div>

                  <div class="col-xs-6">
                    <label>NO & TANGGAL SURAT/MEMO</label>
                  <textarea id="tinytextarea" name="no_surat_memo" class="form-control" ><?= $key->no_surat_memo ?></textarea>
                  </div>

                  <div class="col-xs-6">
                    <label>HAL</label>
                  <textarea id="tinytextarea1" class="form-control" name="perihal"><?= $key->hal ?></textarea>
                  </div>

                  <div class="col-xs-6">
                    <label>PETUNJUK/DISPOSISI</label>
                  <textarea id="tinytextarea2" class="form-control" name="disposisi"><?= $key->disposisi ?></textarea>
                  </div>
              </div>

                  <div class="box-footer">
                    <input type="submit" name="Simpan" class="btn btn-info pull-right" value="UPDATE" >
                  </div>
                </form>
              <?php endforeach; ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
