<?php
session_start();

if(!isset($_SESSION['$login'])){
    header("Location: login.php");
    exit;
}

require 'functions.php';

$Id = $_GET['Id'];

$m = query("SELECT * FROM mahasiswa WHERE Id = $Id");

if (isset($_POST['Ubah'])) {
    if (Ubah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo 'Data gagal diubah';
    }
}

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
    <h3>Form Ubah Data Mahasiswa</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="Id" required value="<?= $m['Id']; ?>">
        <ul>
            <li>
                <label>
                    Gambar :
                    <input type="file" name="Gambar" required value="<?= $m['Gambar']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Nama :
                    <input type="text" name="Nama" autofocus required value="<?= $m['Nama']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Nim :
                    <input type="text" name="Nim" required value="<?= $m['Nim']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Email :
                    <input type="text" name="Email" required value="<?= $m['Email']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Departemen :
                    <input type="text" name="Departemen" required value="<?= $m['Departemen']; ?>">
                </label>
            </li>

            <li>
                <button type="submit" name="Ubah">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>