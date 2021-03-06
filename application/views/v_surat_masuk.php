  <?php
  $title = 'Surat Masuk';
   ?>
   <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="row">

        <div class="col-xs-12">
          <div class="row">
              <?php if($this->session->flashdata('message')){ ?>
            <div class="alert alert-success" id="notifications"><?php echo $this->session->flashdata('message'); ?></div>
          <? } ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                <center><h2>
                  <img src="<?= base_url().'assets/img/setwapres.png'?>" width="30px">
                  Surat Masuk <small>Sekretariat Wakil Presiden</small>
                </h2></center>
              </h3>
              <div class="box-footer clearfix">
              </div>
              <div class="box-tools">
                <form action="dataAgenda.php">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="date" name="tanggal" class="form-control pull-right" required>

                  <div class="input-group-btn">
                    <input type="submit" class="btn btn-default" value="Cari"><i class="fa fa-search"></i>
                  </div>
                </div>
              </form>
            </div>
          </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-hover table-bordered">
                <tr>
                  <th>No.</th>
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
                $no = 1;
                foreach($user as $rows):
                if($rows->jenis_surat == 'in'){
                  $jenis_surat = 'Surat Masuk';
                }else{
                  $jenis_surat = 'Surat Keluar';
                }
                 ?>
                   <tr>
                     <td><?= $no++ ?></td>
                     <td><?= $rows->tanggal ?></td>
                     <td><?= $rows->no_agenda ?></td>
                     <td><?= $rows->diterima ?></td>
                     <td><?= $rows->no_surat_memo ?></td>
                     <td><?= $rows->hal ?></td>
                     <td><?= $rows->disposisi ?></td>
                     <td><?= $jenis_surat ?></td>

                     <td>
                        <?= anchor('SuratMasuk/edit/'.$rows->id_agenda, 'Edit'); ?>
                        <?= anchor('SuratMasuk/hapus/'.$rows->id_agenda, 'Hapus'); ?>

                     </td>
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
  </div>
