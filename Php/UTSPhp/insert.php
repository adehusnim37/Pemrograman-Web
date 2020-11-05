<?php
include "connection.php";

$id  = $_POST['id'];
$nama = $_POST['nama'];
$sku = $_POST['sku'];
$jumlahstok = $_POST['jumlah'];
$harga = $_POST['harga'];
$idkategori = $_POST['idkategori'];
$namakategori=$_POST['namakategori'];

$insert = mysqli_query($koneksi, "INSERT INTO `detailbarang` (`idbarang`, `namabarang`, `sku`, `jumlahstok`, `hargasatuan`) VALUES ('$id', '$nama','$sku',$jumlahstok,'$harga')");
$insert2 = mysqli_query($koneksi,"INSERT INTO `kategoribarang` (`idkategori`, `namakategori`) VALUES ('$idkategori', '$namakategori')");

if ($insert){
    header('Location: home.php');
}else{
    echo "gagal ya";
}
?>
