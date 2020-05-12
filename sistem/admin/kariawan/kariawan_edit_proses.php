<?php
 include "../../pages/coneksi/config.php";


			
 $querii="UPDATE kariawan SET 
nama_kariawan       ='$_POST[nama]',
jenis_kariawan      ='$_POST[jk]',
agama_kariawan      ='$_POST[agama]',
alamat_kariawan     ='$_POST[alamat]',
jabatan_kariawan    ='$_POST[jabatan]',
no_hp               ='$_POST[hp]'
where id_kariawan   ='$_POST[id]'";
mysqli_query($koneksi,$querii);
mysqli_close($koneksi);
header('location:kariawan_view.php');
