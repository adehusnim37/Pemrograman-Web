<?php include 'connection.php';

if(isset($_POST['submit'])){
    $kategori	= $_POST['kategori'];

    $cek = mysqli_query($koneksi, "SELECT * FROM kategoribarang WHERE namakategori='$kategori'") or die(mysqli_error($koneksi));

if(mysqli_num_rows($cek) == 0) {
    $sql = mysqli_query($koneksi, "INSERT INTO kategoribarang(namakategori) VALUES('$kategori')") or die(mysqli_error($koneksi));

    if($sql){
        echo '<script>alert("Berhasil menambahkan data."); document.location="kategori.php";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
    }
}else{
    echo '<div class="alert alert-warning">Gagal, Nama Kategori sudah ada.</div>';
}
}

?><!DOCTYPE html>
<html>
<form action="addKategori.php" method="post">
    <label> nama Kategori </label><br/>
    <input type="text" name="kategori" placeholder="nama Kategori">
    <br/><br/>


    <input type="submit" name="submit" value="Tambah data">
</form>

</html>
