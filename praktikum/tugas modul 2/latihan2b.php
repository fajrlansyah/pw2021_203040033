<!--
Nama : Muhammad Fajriansyah
Nrp : 203040033
Shift Praktikum : Rabu pukul 09.00 WIB
-->

<?php  
	$jawabanIsset = "Isset adalah = untuk menentukan apakah suatu variabel sudah terdevinisi nilainya atau belum. Akan menghasilkan true jika variabel terdifinisi dan false ketika variabel kosong atau tidak terdifinisi <br></br>";
	$jawabanEmpty = "Empty adalah = untuk menentukan apakah suatu itu kosong/tidak terdifinisi atau belum. Akan menghasilkan false jika variabel terdifinisi dan true ketika variabel kosong atau tidak terdifinisi";

	function soal($style){
		echo $GLOBALS['jawabanIsset'];
		echo $GLOBALS['jawabanEmpty'];
	}

	echo soal(
		"font-family: Arial; font-sized:28px; color:#8c782d; font-style:italic; font-weight: bold;"
	);

?>