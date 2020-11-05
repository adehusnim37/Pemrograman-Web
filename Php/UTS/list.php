<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title></title>
</head>
<body>
<h3>Data user</h3>
<table border="1" class="table">
    <tr>
        <th>Apoteker ID</th>
        <th>Nama apoteker</th>
        <th>Alamat</th>
        <th>Username</th>
        <th>Sandi</th>
        <th>Pilihan</th>
    </tr>
    <?php
    include "connection.php";
    $query = mysqli_query($koneksi, "SELECT * FROM `tbl_apoteker`");
    $nomor = 1;
    while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data['aptid']; ?></td>
            <td><?php echo $data['aptnama']; ?></td>
            <td><?php echo $data['aptalamat']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['sandi']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['aptid']?>"> Ganti data </a>
                <a href="delete.phpid=<?php echo $data['aptid']?>"> Hapus </a>
            </td>
        </tr>
    <?php } ?>
    <div>
        <a href="add.php">Tambah Data</a
            <br/><br/>
    </div>
</table>
</body>
</html><?php
