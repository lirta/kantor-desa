<?php include "../../pages/coneksi/config.php";
if (!isset($_SESSION)) {
  session_start();
}
if (
  empty($_SESSION['username']) and
  empty($_SESSION['password'])
) {
  header('location:../../pages/login/login.php');
} else {
  if ($_SESSION['akses'] == "ADMIN") {
?>
    <!DOCTYPE html>
    <html>

    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>KANTOR DESA KARYA INDAH</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <body class="hold-transition sidebar-mini">
      <div class="wrapper">
        <!-- Navbar -->
        <?php include 'navbar.php';
        include 'sidebar.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <div class="container-fluid">
            </div><!-- /.container-fluid -->
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">DATA KARIAWAN</h3> <br><br>
                    <a href='kariawan_add.php' class='btn btn-primary'>TAMBAH DATA</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>NAMA</th>
                          <th>JENIS KELAMIN</th>
                          <th>AGAMA</th>
                          <th>Hp</th>
                          <th>ALAMAT</th>
                          <th>JABATAN</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        $queri = "SELECT * FROM kariawan ";
                        $hasil = mysqli_query($koneksi, $queri);
                        $no = 1;
                        while ($kolom = mysqli_fetch_assoc($hasil)) {
                        ?><tr>
                            <td><?php echo "$kolom[nama_kariawan]"; ?></td>
                            <td><?php echo "$kolom[jenis_kariawan]"; ?></td>
                            <td><?php echo "$kolom[agama_kariawan]"; ?></td>
                            <td><?php echo "$kolom[no_hp]"; ?></td>
                            <td><?php echo "$kolom[alamat_kariawan]"; ?></td>
                            <td><?php echo "$kolom[jabatan_kariawan]"; ?></td>
                            <td><?php echo "
                            <a href='kariawan_hapus.php?id=$kolom[id_kariawan]' onclick=\"return confirm('Apakah anda yakin akan menghapus :)\" class='btn btn-danger'>Hapus</a> 
                            <a href='kariawan_edit.php?id=$kolom[id_kariawan]' class='btn btn-warning'>Edit</a>"; ?></td>
                          </tr>
                        <?php
                          $no = $no + 1;
                        }
                        ?>

                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include '../footer.php'; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="../../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- DataTables -->
      <script src="../../plugins/datatables/jquery.dataTables.js"></script>
      <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
      <!-- AdminLTE App -->
      <script src="../../dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../../dist/js/demo.js"></script>
      <!-- page script -->
      <script>
        $(function() {
          $("#example1").DataTable();
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
          });
        });
      </script>
    </body>

    </html>
<?php
  } else {
    echo '<script language="javascript">
                        alert ("Anda Tida Punya Akses");
                        window.location="../../pages/login/logout.php";
                        </script>';
    exit();
  }
}; ?>