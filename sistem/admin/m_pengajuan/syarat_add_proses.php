<?php
include "../../pages/coneksi/config.php";



$kat    = $_POST['surat'];
$input = $_POST['sa'];
foreach ($input as $output) {
    $queri = "INSERT INTO syarat (id_jenis_surat, syarat) values ('$kat', '$output')";
    mysqli_query($koneksi, $queri);
}

header('location:syarat_view.php');
