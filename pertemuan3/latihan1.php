<?php  
/*
Muhammad Fajriansyah
203040033
https://github.com/fajrlansyah/pw2021_203040033.git
Pertemuan 3 - 18 Februari 2021
Mempelajari mengenai sintaks PHP
*/
?>

<?php
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $++ ) {
// 	echo "hello world <br>";
// }


// $i = 0;
// while ( $i < 5) {
// 	echo "hello world! <br>";
// $i++;
// }

// $i = 0;
// do {
// 	echo "hello world! <br>";
// $i++;	
// } while ($i < 5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan 1</title>
	<style>
		.warna-baris {
			background-color: silver;
		}
	</style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
	<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
		<?php if ( $i % 2 == 1 ) : ?>
			<tr class="warna-baris">
		<?php else : ?>
			<tr>
		<?php endif; ?>
			<?php for ( $j = 1; $j <= 5; $j++ ) : ?>
				<td><?= "$i, $j"; ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
</table>

</body>
</html>