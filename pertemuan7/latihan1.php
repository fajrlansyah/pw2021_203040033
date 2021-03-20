<?php 
// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040033",
		"nama" => "Muhammad Fajriansyah",
		"email" => "203040033@unpas.ac.id",
		"jurusan" => "Teknik Informatika",
		"gambar" => "img.jpg"
	],
	[
		"nama" => "Hilman Sulaeman", 
		"nrp" => "203040029",
		"email" => "hilman05@gmail.com",
		"jurusan" => "Teknik Industri",
		"gambar" => "img.jpg"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>