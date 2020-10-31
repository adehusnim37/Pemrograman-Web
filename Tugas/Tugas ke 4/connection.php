<?php

$koneksi = mysqli_connect("localhost","root","");


$db = mysqli_select_db($koneksi, "pemrogramanweb");


if (true) {
    echo "berhasil";
}else
    echo "gagal";