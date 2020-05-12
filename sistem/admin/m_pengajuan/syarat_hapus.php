<?php
include "../../pages/coneksi/config.php";

mysqli_multi_query($koneksi, "DELETE FROM syarat WHERE id_syarat='$_GET[id]';");
mysqli_close($koneksi);
header('location:Syarat_view.php');
