<?php 

function koneksi()
{
    //koneksi ke database dan pilih database
    return mysqli_connect('localhost', 'root', '', 'web');
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    // //jika hasilnya ada 1 data
    if(mysqli_num_rows($result)==1){
        return mysqli_fetch_assoc($result);
    }

    $rows = []; 
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function Tambah($data){
    $conn = koneksi();

    $Gambar = htmlspecialchars($data['Gambar']);
    $Nama = htmlspecialchars($data['Nama']);
    $Nim = htmlspecialchars($data['Nim']);
    $Email = htmlspecialchars($data['Email']);
    $Departemen = htmlspecialchars($data['Departemen']);
    
    $query = "INSERT INTO mahasiswa VALUES (null, '$Gambar', '$Nama', '$Nim', '$Email', '$Departemen');";

    mysqli_query($conn, $query);
    
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);

}
?>