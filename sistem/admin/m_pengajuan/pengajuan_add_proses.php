<?php
include "../../pages/coneksi/config.php";


$querii = "INSERT INTO jenis_surat ( nama_surat) values ('$_POST[jenis]')";
mysqli_query($koneksi, $querii);
mysqli_close($koneksi);
header('location:pengajuan_view.php');
