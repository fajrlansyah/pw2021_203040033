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

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
        echo "<script>
        alert('data berhasil dihapus');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "data gagal dihapus!";
}