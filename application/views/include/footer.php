<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="#">WahyuAlfarisi</a>.</strong> All rights
  reserved.
</footer>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url().'assets/js/sweetalert.min.js' ?>"></script>
<script src="<?= base_url().'assets/bower_components/jquery/dist/jquery.min.js' ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url().'assets/bower_components/bootstrap/dist/js/bootstrap.min.js' ?>"></script>
<!-- SlimScroll -->
<script src="<?= base_url().'assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js' ?>"></script>
<!-- FastClick -->
<script src="<?= base_url().'assets/bower_components/fastclick/lib/fastclick.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url().'assets/dist/js/adminlte.min.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url().'assets/dist/js/demo.js' ?>"></script>

<script src="<?= base_url().'assets/bower_components/datatables.net/js/jquery.dataTables.min.js' ?>"></script>
<script src="<?= base_url().'assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js' ?>"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
$('#notifications').slideDown('slow').delay(2000).slideUp('slow');
</script>
</body>
</html>
