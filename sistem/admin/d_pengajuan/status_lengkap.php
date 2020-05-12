<?php
include "../../pages/coneksi/config.php";

$status = "LENGKAP";

$querii = "UPDATE pengajuan SET status		='$status'
						where
						id_pengajuan 			='$_GET[id]'";
mysqli_query($koneksi, $querii);
mysqli_close($koneksi);
header('location:terima_view.php');
