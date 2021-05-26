<?php

//koneksi ke database dan pilih database
$conn = mysqli_connect('localhost', 'root', '', 'web');

//query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ubah data kedalam array
//$row = mysqli_fetch_row($result); //array numerik
//$row = mysqli_fetch_assoc($result); //array associative
//$row = mysqli_fetch_array($result); //array array

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
$mahasiswa = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1;
        foreach ($mahasiswa as $m) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="img/<?= $m['Gambar']; ?>" width="60px"></td>
                <td><?= $m['Nama']; ?></td>
                <td><?= $m['Nim']; ?></td>
                <td><?= $m['Email']; ?></td>
                <td><?= $m['Departemen']; ?></td>
                <td>
                    <a href="">ubah</a> | <a href="">hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>