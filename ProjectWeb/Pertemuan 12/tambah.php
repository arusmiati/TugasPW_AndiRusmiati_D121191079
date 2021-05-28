<?php

require 'functions.php';

if (isset($_POST['Tambah'])) {
    if (Tambah($_POST) > 0) {
        echo "<script> 
                    alert('data berhasil ditambahkan'); 
                    document.location.href = 'index.php';
               </script>";
    } else {
        echo "data gagal ditambahkan";
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
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Gambar :
                    <input type="text" name="Gambar" required>
                </label>
            </li>
            <li>
                <label>
                    Nama :
                    <input type="text" name="Nama" autofocus required>
                </label>
            </li>
            <li>
                <label>
                    Nim :
                    <input type="text" name="Nim" required>
                </label>
            </li>
            <li>
                <label>
                    Email :
                    <input type="text" name="Email" required>
                </label>
            </li>
            <li>
                <label>
                    Departemen :
                    <input type="text" name="Departemen" required>
                </label>
            </li>

            <li>
                <button type="submit" name="Tambah">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>