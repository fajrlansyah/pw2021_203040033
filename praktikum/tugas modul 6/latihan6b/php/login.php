<!--
Nama : Muhammad Fajriansyah
Nrp : 203040033
Shift Praktikum : Rabu pukul 10.00 WIB
-->

<?php 
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
    }


  $error = true;
  }
}
?>