<?php
include "../../pages/coneksi/config.php";

$pas  = md5($_POST['password']);
$cek  = $_POST['password'];

if (!empty($cek)) {
    $queri = "UPDATE login SET 
                                        password        ='$pas',
                                        akses           ='$_POST[akses]'
                                        where id_login  = '$_POST[id]' ";
    mysqli_query($koneksi, $queri);
    mysqli_close($koneksi);
    header('location:akses_view.php');
} else {
    $querii = "UPDATE login SET 
                                        akses           ='$_POST[akses]'
                                        where id_login  = '$_POST[id]' ";
    mysqli_query($koneksi, $querii);
    mysqli_close($koneksi);
    header('location:akses_view.php');
}
