<!--
Nama : Muhammad Fajriansyah
Nrp : 203040033
Shift Praktikum : Rabu pukul 09.00 WIB
-->

<?php  
	function tumpukanBola($tumpukan){
		for ($i = 1; $i <= $tumpukan; $i++) {
			for ($j = 1; $j <= $i; $j++){
				echo "<div class='bola'> $i </div>";
			}

		echo "<br>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Documents</title>
	<style>
		.bola{
			width: 50px;
			height: 50px;
			display: table-cell;
			text-align: center;
			vertical-align: middle;
			border: 2px solid black;
			border-radius: 50%;
			background-color: salmon;
		}

		.line{
			border: 2px solid black;
			padding: 15px;
			width: 350px;
		}
	</style>
</head>

<body>
	<div class="line">
	<?php tumpukanBola(5) ?>
	</div>
</body>
</html>