<?php  
/*
Muhammad Fajriansyah
203040033
https://github.com/fajrlansyah/pw2021_203040033
Pertemuan 13 - 02 Mei 2021
Mempelajari mengenai sintaks PHP
*/
?>
<?php 
session_start();
session_destroy();
header("Location: login.php");
exit;
