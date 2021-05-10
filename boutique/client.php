<?php
    include('header.php');
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mes Clients
        <small>Tous ceux qui ont été interesser par vos produits</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> ThioGGou </a></li>
        <li class="active">Mes Clients</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tous ceux qui ont été interesser par vos produits   sur ThioGGou</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom Complet</th>
                  <th>Dernière consultation</th>
                  <th>Nbre achat</th>
                  <th>Profile</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Diallo Mamadou Alpha</td>
                  <td>05/12/2017 15h45</td>
                  <td>0</td>
                  <td> <a href="#"> afficher</a> </td>
                </tr>
                <tr>
                  <td>Diallo Mamadou Alpha</td>
                  <td>05/12/2017 15h45</td>
                  <td>0</td>
                  <td> <a href="#"> afficher</a> </td>
                </tr>
                <tr>
                  <td>Diallo Mamadou Alpha</td>
                  <td>05/12/2017 15h45</td>
                  <td>0</td>
                  <td> <a href="#"> afficher</a> </td>
                </tr>
                <tr>
                  <td>Diallo Mamadou Alpha</td>
                  <td>05/12/2017 15h45</td>
                  <td>0</td>
                  <td> <a href="#"> afficher</a> </td>
                </tr>
                <tr>
                  <th>Nom Complet</th>
                  <th>Dernière consultation</th>
                  <th>Nbre achat</th>
                  <th>Profile</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php
    include('footer.php');
  ?>

  
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
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
</body>
</html>