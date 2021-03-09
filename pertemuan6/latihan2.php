<?php  
/*
Muhammad Fajriansyah
203040033
https://github.com/fajrlansyah/pw2021_203040033
Pertemuan 6 - 10 Maret 2021
Mempelajari mengenai sintaks PHP
*/
?>

<?php  
// $mahasiswa = [
// ["Muhammad Fajriansyah", "203040033", "203040033@unpas.ac.id", "Teknik Informatika"],
// ["Hilman Sulaeman", "203040029", "hilman05@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[
		"nama" => "Muhammad Fajriansyah",
		"nrp" => "203040033",
		"email" => "203040033@unpas.ac.id",
		"jurusan" => "Teknik Informatika",
		"gambar" => "fajri.jpg"
	],
	[
		"nama" => "Hilman Sulaeman",
		"nrp" => "203040029",
		"email" => "hilman05@gmail.com",
		"jurusan" => "Teknik Industri",
		"gambar" => "hilman.jpg"
	]
];
// echo $mahasiswa[1]["email"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach ( $mahasiswa as $mhs ) : ?>
	<ul>
		<li>
			<img src="img/<?= $mhs["gambar"];  ?>">
		</li>
		<li>Nama : <?= $mhs["nama"]; ?></li>
		<li>NRP : <?= $mhs["nrp"]; ?></li>
		<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
		<li>Email : <?= $mhs["email"]; ?></li>
	</ul>
	<?php endforeach; ?>

</body>
</html>