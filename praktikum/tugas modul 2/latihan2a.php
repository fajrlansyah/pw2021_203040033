<!--
Nama : Muhammad Fajriansyah
Nrp : 203040033
Shift Praktikum : Rabu pukul 09.00 WIB
-->

<?php  
	function gantistyle($tulisan, $style1, $style2){
		echo "
			<div class='$style1'>
				<p style='$style2'> $tulisan </p>
			</div>
		";
	}

	echo gantistyle(
		"Selamat Datang di Praktikum PW",
		"border: 1px solid; box-shadow: 0px 1px 3px 2px;",
		"font-family: Arial; font-sized:28px; color:#8c782d; font-style:italic; font-weight:bold;"
	);

?>