<?php
include "connection.php";

$id  = $_POST['id'];
$nama = $_POST['namaapoteker'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];

$insert = mysqli_query($koneksi, "INSERT INTO `tbl_apoteker` (`aptid`, `aptnama`, `aptalamat`, `username`, `sandi`) VALUES ('$id','$nama','$alamat','$username','$password')");

if ($insert){
    header('Location: list.php');
}else{
    echo "gagal ya";
}
?>
