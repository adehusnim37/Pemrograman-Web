<?php

include 'connection.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $cek =  mysqli_query($koneksi, "SELECT * FROM kategoribarang WHERE idkategori='$id'") or die(mysqli_error
    ($koneksi));
    if (mysqli_num_rows($cek) > 0){
        $delete = mysqli_query($koneksi, "DELETE FROM kategoribarang WHERE idkategori='$id'") or die(mysqli_error($koneksi));
        if($delete){
            echo '<script>alert("Berhasil menghapus data."); document.location="kategori.php";</script>';
        }else{
            echo '<script>alert("Gagal menghapus data."); document.location="kategori.php";</script>';
        }
    }else{
        echo '<script>alert("ID tidak ditemukan di database."); document.location="kategori.php";</script>';
    }
}else{
    echo '<script>alert("ID tidak ditemukan di database."); document.location="kategori.php";</script>';
}
