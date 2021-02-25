<?php  
/*
Muhammad Fajriansyah
203040033
https://github.com/fajrlansyah/pw2021_203040033.git
Pertemuan 4 - 25 Februari 2021
Mempelajari mengenai sintaks PHP
*/
?>

<?php  
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time("");
// echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,5,02,2002));


// strtotime
echo date("l", strtotime("2 may 2002"));

?>