<!--
Nama : Muhammad Fajriansyah
Nrp : 203040033
Shift Praktikum : Rabu pukul 09.00 WIB
-->

<?php  
$pemainbola = [
	"Mohammad Salah",
	"Cristiano Ronaldo",
	"Lionel Messi",
	"Zlatan Ibrahimovic",
	"Neymar Jr"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<title>Latihan3b 203040033</title>
</head>
<body>
	<h3>Daftar pemain bola terkenal</h3>
	<ol>
		<?php foreach($pemainbola as $pemain) : ?>
			<li><?= $pemain ?></li>
		<?php endforeach; ?>
	</ol>

	<?php  
	array_push($pemainbola,"Luca Modric", "Sadio Mane");
	sort($pemainbola);
	?>
	
	<h3>Daftar pemain bola terkenal baru</h3>
	<ol>
		<?php foreach($pemainbola as $pemainbaru) : ?>
			<li><?= $pemainbaru ?></li>
		<?php endforeach; ?>
	</ol>

</body>
</html>