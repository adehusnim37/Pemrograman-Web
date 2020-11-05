<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title></title>
</head>
<body>
<h3>Data Barang</h3>
<div>
    <a href="add.php" style="margin-right: 15px">Tambah Data</a>
    <a href="kategori.php">Daftar Kategori</a>
    <br/>
</div>
<form action="home.php" method="post">
<!--    Search by kategori, barang, sku-->
<label for="search">Pencarian berdasarkan</label>
    <select name="searchby" style="margin-bottom: 10px">
        <option value="">Pilih</option>
        <option value="kategori">Kategori</option>
        <option value="barang">barang</option>
        <option value="sku">sku</option>
    </select>
    <input type="text" class="form-control mr-1" id="search" name="keyword" placeholder="Masukkan Keyword">
    <input type="submit" name="search" value="Cari"><br>
<!-- Search by range -->
    <input type="number"  id="hargaFrom" name="hargaFrom" placeholder="0">-
    <input type="number"  id="hargaTo" name="hargaTo" placeholder="100000">
    <input type="submit" style="margin-bottom: 10px"  value="Cari Range" name="range"/><br>

</form>

<?php
		if(isset($_POST['search'])) {
            $cari = $_POST['keyword'];
            $searchby = $_POST['searchby'];
            echo "<b>Hasil pencarian untuk : " . $searchby . " " . $cari . "</b>";
        }elseif (isset($_POST['range'])) {
            $from=$_POST['hargaFrom'];
            $to=$_POST['hargaTo'];
            echo "<b>Hasil filter harga dari Rp ".$from." - Rp ".$to."</b>";
        }
	?>

<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Nama Kategori</th>
        <th>SKU</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Pilihan</th>
    </tr>
    <?php
    include "connection.php";
    if(isset($_POST['search'])){
        $sb = $_POST['searchby'];
        if ($sb == "kategori"){
            $by =  "k.namakategori";
        }elseif ($sb == "barang"){
            $by = "p.namabarang";
        }elseif ($sb == "sku"){
            $by = "p.sku";
        }

        $cari = $_POST['keyword'];
        if (empty($cari)){
            $query = mysqli_query($koneksi,"SELECT p.idbarang, p.namabarang, p.sku, p.idkategori, p.hargasatuan, p.jumlahstok, k.namakategori FROM detailbarang p 
INNER JOIN kategoribarang k ON p.idkategori = k.idkategori ORDER BY p.idbarang") or die(mysqli_error($koneksi));
        }else {

        $query = mysqli_query($koneksi,"SELECT p.idbarang, p.namabarang, p.sku, p.idkategori, p.hargasatuan, p.jumlahstok, k.namakategori FROM detailbarang p 
INNER JOIN kategoribarang k ON p.idkategori = k.idkategori WHERE ".$by." LIKE '%".$cari."%' ORDER BY p.idbarang") or
        die(mysqli_error($koneksi));
        }

    }elseif (isset($_POST['range'])) {
				$from=$_POST['hargaFrom'];
				$to=$_POST['hargaTo'];
        $query = mysqli_query($koneksi,"SELECT p.idbarang, p.namabarang, p.sku, p.idkategori, p.hargasatuan, p.jumlahstok, k.namakategori FROM detailbarang p 
INNER JOIN kategoribarang k ON p.idkategori = k.idkategori WHERE hargasatuan BETWEEN '$from' and '$to' ORDER BY p
.idbarang") or
        die(mysqli_error($koneksi));

    } else{
        $query = mysqli_query($koneksi,"SELECT p.idbarang, p.namabarang, p.sku, p.idkategori, p.hargasatuan, p.jumlahstok, k.namakategori FROM detailbarang p 
INNER JOIN kategoribarang k ON p.idkategori = k.idkategori ORDER BY p.idbarang") or die(mysqli_error($koneksi));
    }

//    var_dump($query); die;
    $no=1;
    while($data = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['namabarang']; ?></td>
            <td><?php echo $data['namakategori']; ?></td>
            <td><?php echo $data['sku']; ?></td>
            <td><?php echo $data['jumlahstok']; ?></td>
            <td><?php echo $data['hargasatuan']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['idbarang']?>"> Ubah </a>|
                <a href="delete.php?id=<?php echo $data['idbarang']?>" onclick="return confirm('Yakin ingin menghapus data ini?')"> Hapus </a>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html><?php
