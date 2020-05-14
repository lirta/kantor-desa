<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../admin/foto/logo.png" class=" img-circle elevation-2" alt="User Image"> </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo "$_SESSION[akses]"; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="index.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Data pengajuan
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="d_pengajuan/pengajuan_view.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Permohonan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="d_pengajuan/tolak_view.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Persyaratan Tidak lengkap</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="d_pengajuan/terima_view.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Persyaratan Lengkap</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="d_pengajuan/proses_view.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Proses Pembuatan Surat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="d_pengajuan/sah_view.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pengesahan Surat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="d_pengajuan/selesai_view.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Selesai</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>