<?php
include "../../pages/coneksi/config.php";

$status = "PENGESAHAN";

$querii = "UPDATE pengajuan SET status		='$status'
						where
						id_pengajuan 			='$_GET[id]'";
mysqli_query($koneksi, $querii);
mysqli_close($koneksi);
header('location:sah_view.php');
