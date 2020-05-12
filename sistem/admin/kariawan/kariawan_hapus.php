<?php
include "../../pages/coneksi/config.php";

$queri="DELETE FROM kariawan WHERE id_kariawan='$_GET[id]';";
mysqli_multi_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:kariawan_view.php');

?>