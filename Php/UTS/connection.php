<?php

$koneksi = mysqli_connect('localhost','root','');

$db = mysqli_select_db($koneksi, "tokokelontong");

if ($koneksi){
    echo "berhasil";
}else{
    echo "jancok goblok";
}
