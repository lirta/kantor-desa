<?php
include "../../pages/coneksi/config.php";



$di   = $_POST['id'];
$input = $_POST['sa'];
$ttal = $_POST['total'];

for ($i = 0; $i < $ttal; $i++) {
    $syarat = $input[$i];
    $iid = $di[$i];
    $queri = "UPDATE syarat SET syarat='$syarat' where id_syarat='$iid'";
    mysqli_query($koneksi, $queri);
}

// foreach ($input as $output) {
//     echo "$di , $output";
//     // $queri = "UPDATE syarat SET syarat='$output' where id_syarat='$di'";
//     // mysqli_query($koneksi, $queri);
// }
mysqli_close($koneksi);
header('location:syarat_view.php');
