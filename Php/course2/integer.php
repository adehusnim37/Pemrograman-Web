<?php

//variabel
$a =10;
$a++;
$nama = "Asep Didieu";
$panggilan ="\n Nama saya teh, $nama";

//boolean
$bol1 = 10;
$bol2 = 20;
$bolfinal = $bol1 + $bol2;
$bolfinalfix = $bol2 > $bolfinal;

//array
$array = ["anjay","panjat"];
$array[] = 'taikucing';

$datadiri["nama"]= "Ade Husni Mubarrok";
$datadiri["golongandarah"] = "B";
$datadiri["alamat"]= "Jl Oro Oro 1 26";

$datadiri = [
    "nama" => "Ade Husni Mubarrok",
    "golongandarah" => "B",
    "alamat" => "Jl Oro Oro 1 26/D"
];

//array multidimensional
$herbivora = ["kambing","sapo","katak"];
$karnivora = ["Harimau","ggs","simba"];
$omnivora  = ["ayam", "bebek", "babi"];
$binatang  = [$herbivora,$karnivora,$omnivora];

//printf
echo $a ."<br>";
echo $panggilan ."<br>";
echo var_dump($bolfinal)."<br>";
echo var_dump($bolfinalfix)."<br>";
echo var_dump($array)."<br>";

echo "Namamu siapa sih : " . $datadiri["nama"] . "<br>";
echo "Alamatmu dimana sih : " . $datadiri["alamat"] . "<br>";
echo "Golongan darahmu apa sih : " . $datadiri["golongandarah"] . "<br>";

echo $binatang[1][2];
?>