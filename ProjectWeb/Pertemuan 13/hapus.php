<?php 
session_start();

if(!isset($_SESSION['$login'])){
    header("Location: login.php");
    exit;
}

require 'functions.php';

$Id = $_GET['Id'];

if(Hapus($Id) > 0){
    echo "<script>
        alert('Data berhasil dihapus');
        document.location.href = 'index.php';
        </script>";
}else{
    echo 'Data gagal dihapus';
}
?>