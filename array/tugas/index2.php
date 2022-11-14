<?php

$warnaterang = ['kuning','hiaju','pink'];
$warnagelap = ['hitam','abu-abu','cokelat'];

// gabung 2 array tersebut menjadi 1
$warna_warna = array_merge($warnaterang,$warnagelap);

// array_marge bisa ditambahkan lebih dari 2
$semua_warna = array_merge(
    $warnaterang
    $warnagelap
    ['magenta','Cyan','Hijau','Kelabu']
);

// unpacking untuk mengekstrak array menggunakan...
$list_buah_lokal = ['mangga','rambutan'];
$list_buah = ['kurma','anggur', ...$list_buah_lokal , 'kismis' ];

// kurma, anggur, Mangga, rambutan , kismis

//explode array berfungsi memecah-belah string lalu diubah ke dalam array 

// expload ada 2 parameter : delimeter(pemisah),string sasaran  (sasaran yang akan kita pecah menjadi array)

$siswa = "andi budi dono kasino indro";
var_dump(explode(" ",$siswa))

// impoad fungsi kebalikannya expload
// impload dia 2 parameter: glue (pengabung),array sasaran(sasaran yang akan kita gabung menjadi string)

$siswa_pintar = ['refa','agus','novan']; //array

$siswa_jago = implode (' ',$siswa_pintar); // array


?>