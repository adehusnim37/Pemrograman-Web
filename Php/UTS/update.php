<?php
include 'connection.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "UPDATE tbl_apoteker SET nama='$nama', alamat='$alamat', username='$username', sandi='$password' WHERE id='$id'");
mysqli_query($koneksi, "INSERT INTO `tbl_apoteker` (`aptid`, `aptnama`, `aptalamat`, `username`, `sandi`) VALUES ('$id','$nama','$alamat','$username','$password')");

if (query) {
    header("location:list.php");
} else {
    alert("Update gagal!");
}

?>