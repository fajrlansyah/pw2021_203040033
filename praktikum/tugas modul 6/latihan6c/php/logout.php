<!--
Nama : Muhammad Fajriansyah
Nrp : 203040033
Shift Praktikum : Rabu pukul 10.00 WIB
-->

<?php  
session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
?>