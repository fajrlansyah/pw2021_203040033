<!--
Nama : Muhammad Fajriansyah
Nrp : 203040033
Shift Praktikum : Rabu pukul 09.00 WIB
-->

<?php  
	function hitungDeterminant($a, $b, $c, $d){
		$hasil = (($a * $d) - ($b * $c));
		echo "<table style='border-left: 1px solid black; border-right: 1px solid black;' cellspacing='5' cellpadding='5'>
			<tr>
				<td> $a </td>
				<td> $b </td>
			</tr>
			<tr>
				<td> $c </td>
				<td> $d </td>
			</tr>
		</table>";

		echo "Determinant dari matriks tersebut adalah $hasil";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Documents</title>
</head>

<body>
	<?php hitungDeterminant(1,2,3,4) ?>
</body>
</html>