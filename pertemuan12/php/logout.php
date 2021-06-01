<?php  
/*
Muhammad Fajriansyah
203040033
https://github.com/fajrlansyah/pw2021_203040033
Pertemuan 12 - 02 Juni 2021
Mempelajari mengenai sintaks PHP
*/
?>
<?php
session_start();
session_destroy();
header("Location: ../index.php");
die;
?>