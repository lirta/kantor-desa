<?php
include "../coneksi/config.php";
$username = $_POST['username'];
$pass     = md5($_POST['password']);
$sql = "SELECT * FROM login WHERE username='$username' AND password='$pass'";
$result = mysqli_query($koneksi, $sql);
$ketemu = mysqli_num_rows($result);
$r = mysqli_fetch_assoc($result);
if ($ketemu > 0) {

  if ($r['status'] == "AKTIF") {
    session_start();
    $_SESSION['username']            = $r['username'];
    $_SESSION['password']            = $r['password'];
    $_SESSION['id_kariawan']            = $r['id_kariawan'];
    $_SESSION['akses']               = $r['akses'];

    if ($_SESSION['akses'] == "ADMIN") {
      header('location:../../admin/index.php');
    } elseif ($_SESSION['akses'] == "KEPALA_DESA") {
      header('location:../../kepala_desa/index.php');
    } else {
      echo '<script language="javascript">
                      alert ("Anda Tida Punya Akses");
                      window.location="logout.php";
                      </script>';
      exit();
    }
  } else {
    echo '<script language="javascript">
              alert ("ANDA SUDAH TIDAK PUNYA AKSES");
              window.location="logout.php";
              </script>';
    exit();
  }
} else {
  echo '<script language="javascript">
              alert ("Username dan Password Anda Salah");
              window.location="login.php";
              </script>';
  exit();
}
