<?php

require 'functions.php';

//ambil id dari URL
$Id = $_GET['Id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE Id = $Id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $m['Gambar']; ?>" width="60px"></li>
        <li>Nama : <?= $m['Nama']; ?></li>
        <li>Nim : <?= $m['Nim']; ?></li>
        <li>Email : <?= $m['Email']; ?></li>
        <li>Departemen : <?= $m['Departemen']; ?></li>
        <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
        <li><a href="latihan3.php">Kembali ke Daftar Mahasiswa</a></li>
    </ul>
</body>

</html>