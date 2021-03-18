<!--
Nama : Muhammad Fajriansyah
Nrp : 203040033
Shift Praktikum : Rabu pukul 09.00 WIB
-->

<?php 
$barang = [
    [
        "nama"=>"Keyboard Digital Alliance Meca 5",
        "deskripsi"=>" Digital Alliance Meca 5 merupakan keyboard gaming dengan mechanical RGB blue switch. Keyboard gaming ini didesain ergonomis, sehingga nyaman ketika digunakan.  ",
        "detailSpek"=>" Mechanical, RGB, Keycaps Double Injection ",
        "harga"=>300000,
        "stokBarang"=>10,
        "foto"=>"image.jpg"
    ],
    [
        "nama"=>" Mouse Digital Alliance AIR WHITE ",
        "deskripsi"=>" Digital Alliance Air White merupakan mouse gaming dilengkapi dengan RGB, Mouse gaming ini didesain ergonomis, sehingga nyaman ketika digunakan. ",
        "detailSpek"=>" Sensor 199 Solution, Switch Huano, Switch Life 10 Million Click Lifecycle ",
        "harga"=>250000,
        "stokBarang"=>10,
        "foto"=>"img.jpg"
    ],
   
];

function rupiahIDR($duit){
    return "Rp" . number_format($duit,2,',','.');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Detail Spek</th>
                    <th>Harga</th>
                    <th>Stok Barang</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($barang as $dagang => $barang) : ?>
                <tr>
                    <td><?= $dagang+1; ?></td>
                    <td><?= $barang["nama"]; ?></td>
                    <td><?= $barang["deskripsi"]; ?></td>
                    <td><?= $barang["detailSpek"]; ?></td>
                    <td><?= rupiahIDR($barang["harga"]) ?></td>
                    <td><?= $barang["stokBarang"]; ?></td>
                    <td>
                        <figure class="image is-128x128">
                            <img src="img/<?= $barang["foto"]; ?>" alt="">
                        </figure>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>
</body>

</html>