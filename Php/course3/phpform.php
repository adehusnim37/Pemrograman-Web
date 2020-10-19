<?php

$nama = $_GET['nama'];
$alamat = $_GET['alamat'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pemrograman Web</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <form>
        <input type="text" name="nama">
        <input type="text" name="alamat">
        <button> Submit </button>
    </form>
    <h1> Selamat datang di kodeku </h1>
    <p> Halo namaku adalah <?php echo $nama; ?> </p>
    <p> Saya tinggal di  <?php echo $alamat; ?></p>
</body>
</html>