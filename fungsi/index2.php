<?php
// function itu ada 2, ada yang mengembalikan nilai dan ada yang tidak 
//array yang berisi 3 nilai
$a = ['merah','kuning','hijau'];

//fungsi dari is_null itu mengemabalikan nilai bernilai true of false
$fungsi_is_null = is_null($a);

//fungsi dari is_array itu mengembalikan apakah array atau tidak 
$fungsi_is_array = is_array($a);

//fungsi dari count
$panjang = count($a);

//fungsi mengenkripsi karakter MD5
$enkripsi = md5('Saya pacar johnny');

//fungsi var_dump untuk menampilkan hasil dari function return
var_dump($fungsi_is_null);
echo "<br>";
var_dump($fungsi_is_array);
echo "<br>";
var_dump($panjang);
echo "<br>";
var_dump($enkripsi);


?>