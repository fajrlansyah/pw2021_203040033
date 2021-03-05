<!--
Nama : Muhammad Fajriansyah
Nrp : 203040033
Shift Praktikum : Rabu pukul 10.00 WIB
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas 1</title>
</head>
<body>
	<table border="2" cellpadding="30" cellspacing="8" align="center">
		<?php for( $b = 1; $b <= 6; $b++ ) : ?>
			<tr>
				<?php for( $k = 1; $k <= 6; $k++ ) : ?>
					<?php if( ($b + $k) % 2 == 1 ) { ?>
						<td bgcolor="salmon"></td>
					<?php } else if( ($b + $k) % 2 == 0 ) { ?>
						<td bgcolor="lightblue"></td>
					<?php } ?>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
</body>
</html>