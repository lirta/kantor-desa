<?php
include "../../pages/coneksi/config.php";

mysqli_multi_query($koneksi, "DELETE FROM jenis_surat WHERE id_jenis_surat='$_GET[id]';");
mysqli_close($koneksi);
header('location:pengajuan_view.php');
