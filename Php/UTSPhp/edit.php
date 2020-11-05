<?php include 'connection.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];


    $select = mysqli_query($koneksi, "SELECT * FROM detailbarang WHERE idbarang='$id'") or die(mysqli_error($koneksi));


    if(mysqli_num_rows($select) == 0){
        echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
        exit();
    }else{
        $data = mysqli_fetch_assoc($select);
    }
}

if(isset($_POST['submit'])){
    $idbarang	= $_POST['id'];
    $namabarang	= $_POST['nama'];
    $kategori	= $_POST['kategori'];
    $sku		= $_POST['sku'];
    $stok		= $_POST['stok'];
    $harga		= $_POST['harga'];

    $sql = mysqli_query($koneksi, "UPDATE detailbarang SET namabarang='$namabarang', idkategori='$kategori', sku='$sku', jumlahstok='$stok', hargasatuan='$harga' WHERE idbarang='$idbarang'") or die(mysqli_error($koneksi));
//var_dump($sql); die;
    if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="home.php";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
    }
}

?><!DOCTYPE html>
<html>
<form action="edit.php" method="post">
    <label> nama barang </label><br/>
    <input type="hidden" name="id"  value="<?= $data['idbarang']; ?>">
    <input type="text" name="nama" placeholder="nama barang" value="<?= $data['namabarang']; ?>">
    <br/><br/>
    <label> Kategori </label><br/>
    <select name="kategori" style="margin-bottom: 10px" required>
        <option value="">Pilih Kategori</option>
        <?php
        $sql = mysqli_query($koneksi, "SELECT * FROM kategoribarang") or die(mysqli_error($koneksi));

        while($row = mysqli_fetch_array($sql)) {
            ?>
            <option value="<?=$row['idkategori']?>" <?php echo 'selected'; ?>><?=$row['namakategori']?></option>;
        <?php	} ?>
    </select><br>

    <label> sku </label><br/>
    <input type="text" name="sku" placeholder="sku barang" value="<?= $data['sku']; ?>">
    <br/><br/>

    <label> jumlah stok </label><br/>
    <input type="number" name="stok" placeholder="Jumlah stok" value="<?= $data['jumlahstok']; ?>">
    <br/><br/>

    <label> harga satuan </label><br/>
    <input type="number" name="harga" placeholder="harga satuan" value="<?= $data['hargasatuan']; ?>">
    <br/><br/>

    <input type="submit" name="submit" value="Ubah data">
</form>

</html>

