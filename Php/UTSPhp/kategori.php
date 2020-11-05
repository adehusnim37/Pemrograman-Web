<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title></title>
</head>
<body>
<h3>Data Kategori</h3>
<div>
    <a href="addKategori.php" style="margin-right: 15px">Tambah Kategori</a>
    <a href="home.php">Daftar Barang</a>
    <br/>
</div>

<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Pilihan</th>
    </tr>
    <?php
    include "connection.php";

        $query = mysqli_query($koneksi,"SELECT * from kategoribarang") or die(mysqli_error($koneksi));


    //    var_dump($query); die;
    $no=1;
    while($data = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['namakategori']; ?></td>
            <td>
                <a href="editKategori.php?id=<?php echo $data['idkategori']?>"> Ubah </a>|
                <a href="deleteKategori.php?id=<?php echo $data['idkategori']?>" onclick="return confirm('Yakin ingin' +
                 ' ' +
                 'menghapus data ini?')"> Hapus </a>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
