<?php  
/*
Muhammad Fajriansyah
203040033
https://github.com/fajrlansyah/pw2021_203040033
Pertemuan 11 - 06 Mei 2021
Mempelajari mengenai sintaks PHP
*/
?>

<?php

require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil dihapus!');
            document.location.href = '../index.php';
            </script>";
} else {
    echo "<script>
            alert('Data Gagal dihapus!');
            document.location.href = '../index.php';
            </script>";
}
?>