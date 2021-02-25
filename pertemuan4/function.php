<?php  
/*
Muhammad Fajriansyah
203040033
https://github.com/fajrlansyah/pw2021_203040033.git
Pertemuan 4 - 25 Februari 2021
Mempelajari mengenai sintaks PHP
*/
?>

<?php 
function salam($waktu = "Datang", $nama = "Admin") {
	return "Selamat $waktu, $nama!";

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("Pagi", "Fajri"); ?></h1>
</body>
</html>