<?php include 'connection.php';

if(isset($_POST['submit'])){
    $namabarang	= $_POST['nama'];
    $kategori	= $_POST['kategori'];
    $sku		= $_POST['sku'];
    $stok		= $_POST['stok'];
    $harga		= $_POST['harga'];

    $sql = mysqli_query($koneksi, "INSERT INTO detailbarang(namabarang, idkategori, sku, jumlahstok, hargasatuan)
    VALUES('$namabarang', '$kategori','$sku', '$stok', '$harga')") or die(mysqli_error($koneksi));
//var_dump($sql); die;
    if($sql){
        echo '<script>alert("Berhasil menambahkan data."); document.location="home.php";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
    }
}

?><!DOCTYPE html>
<html>
<form action="add.php" method="post">
    <label> nama barang </label><br/>
    <input type="text" name="nama" placeholder="nama barang">
    <br/><br/>
    <label> Kategori </label><br/>
    <select name="kategori" style="margin-bottom: 10px" required>
        <option value="">Pilih Kategori</option>
        <?php
        $sql = mysqli_query($koneksi, "SELECT * FROM kategoribarang") or die(mysqli_error($koneksi));

        while($row = $sql->fetch_array()) {
            ?>
            <option value="<?=$row['idkategori']?>"> <?=$row['namakategori']?></option>;
        <?php	} ?>
    </select><br>

    <label> sku </label><br/>
    <input type="text" name="sku" placeholder="sku barang">
    <br/><br/>

    <label> jumlah stok </label><br/>
    <input type="number" name="stok" placeholder="Jumlah stok">
    <br/><br/>

    <label> harga satuan </label><br/>
    <input type="number" name="harga" placeholder="harga satuan">
    <br/><br/>

    <input type="submit" name="submit" value="Tambah data">
</form>

</html>
