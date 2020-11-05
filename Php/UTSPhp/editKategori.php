<?php include 'connection.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];


    $select = mysqli_query($koneksi, "SELECT * FROM kategoribarang WHERE idkategori='$id'") or die(mysqli_error($koneksi));


    if(mysqli_num_rows($select) == 0){
        echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
        exit();
    }else{
        $data = mysqli_fetch_assoc($select);
    }
}

if(isset($_POST['submit'])){
    $idkategori	= $_POST['id'];
    $kategori	= $_POST['kategori'];

    $sql = mysqli_query($koneksi, "UPDATE kategoribarang SET namakategori='$kategori' WHERE idkategori='$idkategori'") or die(mysqli_error($koneksi));
//var_dump($sql); die;
    if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="kategori.php";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
    }
}

?><!DOCTYPE html>
<html>
<form action="editKategori.php" method="post">
    <label> nama barang </label><br/>
    <input type="hidden" name="id"  value="<?= $data['idkategori']; ?>">
    <input type="text" name="kategori" placeholder="kategori barang" value="<?= $data['namakategori']; ?>">
    <br/><br/>


    <input type="submit" name="submit" value="Ubah data">
</form>

</html>

