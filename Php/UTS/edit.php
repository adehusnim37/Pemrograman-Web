<h3>Edit data</h3>

<?php
include "connection.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_apoteker WHERE aptid='$id'")or die(mysql_error());
$nomor = 1;
while($data = mysqli_fetch_array($query)){
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['aptid'] ?>">
                    <input type="text" name="nama" value="<?php echo $data['aptnama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['aptalamat'] ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $data['sandi'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
<?php } ?>