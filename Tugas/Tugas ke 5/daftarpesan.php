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
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
    </tr>
    <?php
    include "connection.php";
    $query = mysqli_query($koneksi, "SELECT * FROM contactsaya")or die(mysql_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['pesan']; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html><?php
