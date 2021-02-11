<?php  
/*
Muhammad Fajriansyah
203040033
https://github.com/fajrlansyah/pw2021_203040033
Pertemuan 2 - 8 Februari 2021
Mempelajari mengenai sintaks PHP
*/
?>

<?php  
// Pertemuan 2 - pw2021_203040033
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dumb

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Muhammad Fajriansyah";
// echo 'Halo, nama saya $nama';

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung string / concatenation / concat
// .
// $nama depan = "Muhammad";
// $nama belakang = "Fajriansyah";
// echo $nama depan . " " . $nama belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x =1;
// $x -= 5;
// echo $x;
// $nama = "Muhammad";
// $nama .= " ";
// $nama .= "Fajriansyah";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 === "1");

// Identitas
// ===, !==
// var_dump(1 === "1")

// Logika
// && , ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 === 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Belajar PHP</title>
</head>
<body>
	<h1>Hallo, Selamat Datang <?php echo "Muhammad Fajriansyah"; ?></h1>

</body>