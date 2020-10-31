<?php
include "connection.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

mysqli_query($koneksi, "INSERT INTO `contactsaya` (`nama`, `email`, `pesan`)VALUES('$nama','$email','$pesan')");

header("location:index.php?pesan=sukses");

