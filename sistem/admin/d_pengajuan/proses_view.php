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
                                    <h3 class="card-title">DATA PENGAJUAN </h3> <br><br>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>NIK</th>
                                                <th>NAMA</th>
                                                <th>NO HP</th>
                                                <th>ALAMAT</th>
                                                <th>JENIS SURAT</th>
                                                <th>TGL PENGAJUAN</th>
                                                <th>STATUS</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $queri = "SELECT * FROM pengajuan inner join jenis_surat on pengajuan.id_jenis_surat=jenis_surat.id_jenis_surat  ";
                                            $hasil = mysqli_query($koneksi, $queri);
                                            $no = 1;
                                            while ($kolom = mysqli_fetch_assoc($hasil)) {
                                                if ($kolom['status'] == "PEMBUATAN") {
                                            ?><tr>
                                                        <td><?php echo "<a href='detail.php?id=$kolom[id_pengajuan]' target='blang'>$kolom[nik_pengajuan]</a>"; ?></td>
                                                        <td><?php echo "$kolom[nama_pengajuan]"; ?></td>
                                                        <td><?php echo "$kolom[hp_pengajuan]"; ?></td>
                                                        <td><?php echo "$kolom[alamat_pengajuan]"; ?></td>
                                                        <td><?php echo "$kolom[nama_surat]"; ?></td>
                                                        <td><?php echo "$kolom[tgl_pengajuan]"; ?></td>
                                                        <td><?php echo "$kolom[status]<br> <a href='status_sah.php?id=$kolom[id_pengajuan]'  class='btn btn-primary btn-sm'>yes</a> 
                                <a href='status_tolak.php?id=$kolom[id_pengajuan]'  class='btn btn-warning  btn-sm'>no</a>";

                                                            ?></td>
                                                        <td><?php echo "
                            <a href='pengajuan_hapus.php?id=$kolom[id_jenis_surat]'  class='btn btn-danger btn-sm'>Hapus</a> "; ?></td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php echo " <a href='../laporan/proses_print.php?=$kolom[id_pengajuan]' class='btn btn-primary'>PRINT</a> <br>"; ?>

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
<?php }; ?>