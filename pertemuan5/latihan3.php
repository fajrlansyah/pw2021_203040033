<?php  
/*
Muhammad Fajriansyah
203040033
https://github.com/fajrlansyah/pw2021_203040033.git
Pertemuan 5 - 04 Maret 2021
Mempelajari mengenai sintaks PHP
*/
?>

<?php 
$mahasiswa = [ 
    ["Muhammad Fajriansyah", "203040033", "Teknik Informatika", "203040033@unpas.ac.id"],
    ["Eldi Anugrah", "203040031", "Teknik Industi", "eldi@yahoo.com"],
    ["Hilman Sulaeman", "203040029", "Teknik Planologi", "hilman05@gmail.com"]

];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>


</body>
</html>