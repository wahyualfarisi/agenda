 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       <img src="<?= base_url().'assets/img/setwapres.png' ?>" width="50px">
       Print Agenda <small>Sekretariat Wakil Presiden</small>
     </h1>
<div class="login-box box box-info">
            <div class="box-header with-border">
              <center><h2 class="box-titleS fa fa-print"> Cetak Agenda</h2></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= site_url('PrintAgenda/actionReport') ?>" target="_blank" class="form-horizontal" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">FROM </label>

                  <div class="col-sm-10">
                    <input type="date" name="date1" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">TO</label>

                  <div class="col-sm-10">
                    <input type="date" name="date2" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Surat</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="jenis_surat">
                      <option value="">--pilih--</option>
                      <option value="in">Surat Masuk</option>
                      <option value="out">Surat Keluar</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="Submit" name="Cari" class="btn btn-default pull-right" value="Print">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    </div>
