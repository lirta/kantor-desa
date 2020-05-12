<?php
include "../../pages/coneksi/config.php";


$acak = rand(00000000, 99999999);

$querii="INSERT INTO kariawan ( id_kariawan,
                                nama_kariawan,
                                jenis_kariawan,
                                agama_kariawan,
                                alamat_kariawan,
                                jabatan_kariawan,
                                no_hp) 
                                values 
                                ( '$acak',
                                '$_POST[nama]',
                                '$_POST[jk]',
                                '$_POST[agama]',
                                '$_POST[alamat]',
                                '$_POST[jabatan]',
                                '$_POST[hp]')";
    mysqli_query($koneksi,$querii);
    mysqli_close($koneksi);
    header('location:kariawan_view.php');
			
?>