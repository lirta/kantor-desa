<?php
include 'assets/coneksi/config.php';


$acak = rand(00000000, 99999999);
$date = date("d/m/Y");

$id = $acak;
$id_surat = $_POST['surat'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tlahir = $_POST['tmpl'];
$tglahir = $_POST['tgll'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pk'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$status = "PERMOHONAN";

$jml = $_POST['jml'];

$namasya = $_POST['sya'];
// $fille=$_POST["gm"];
$namafoto = $_FILES['gm']['name'];
$folderawal = $_FILES['gm']['tmp_name'];

$queri = "INSERT INTO pengajuan ( id_pengajuan,
 									id_jenis_surat,
 									nik_pengajuan,
 									nama_pengajuan,
									tempat_lahir_pengajuan,
									tgl_lahir_pengajuan,
									agama_pengajuan,
									pekerjaan_pengajuan,
									alamat_pengajuan,
 									hp_pengajuan,
 									tgl_pengajuan,
 									status) 
									values 
 									('$id',
									 '$id_surat',
 									'$nik',
 									'$nama',
									'$tlahir',
									'$tglahir',
									'$agama',
									'$pekerjaan',
 									'$alamat',
 									'$hp',
									'$date',
 									'$status')";
mysqli_query($koneksi, $queri);

for ($i = 0; $i < $jml; $i++) {
	$nmsyrat = $namasya["$i"];
	$filee = $namafoto["$nmsyrat"];
	$fileA = $folderawal["$nmsyrat"];
	$nama = $acak . $filee;
	$foldertujuan = "assets/file/";
	move_uploaded_file($fileA, $foldertujuan . $nama);
	$querii = "INSERT INTO file_syarat ( id_pengajuan,
									file) 
									values 
									('$id',
									'$nama')";
	mysqli_query($koneksi, $querii);
}
mysqli_close($koneksi);
echo '<script language="javascript">
      alert ("TERIMA KASIH... SILAHKAN MENUNGGU KONFIRMASI DARI ADMIN KAMI");
      window.location="index.php";
      </script>';
exit();
