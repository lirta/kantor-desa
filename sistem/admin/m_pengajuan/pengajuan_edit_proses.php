<?php
include "../../pages/coneksi/config.php";



$querii = "UPDATE jenis_surat SET nama_surat		='$_POST[jenis]'
						where
						id_jenis_surat 			='$_POST[id]'";
mysqli_query($koneksi, $querii);
mysqli_close($koneksi);
header('location:pengajuan_view.php');
