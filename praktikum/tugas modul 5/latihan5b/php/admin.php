<!--
Nama : Muhammad Fajriansyah
Nrp : 203040033
Shift Praktikum : Rabu pukul 10.00 WIB
-->

<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<div class="add">
    <a href="php/tambah.php">Tambah Data</a>
</div>

<table border="1" cellpadding="13" cellspacing="0">
    <tr>
        <th>#</th>
        <th>opsi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href=""><button>Ubah</button></a>
                <a href=""><button>Hapus</button></a>
            </td>
            <td><img src="../latihan5a/assets/img/<?= $mhs['img']; ?>" alt=""></td>
            <td><?= $mhs['nrp']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
</table>