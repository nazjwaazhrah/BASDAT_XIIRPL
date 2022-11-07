<?php

// array adalah tipe data yang berisi beberapa tipe data (string maupun integer)
// keynya diawali dengan angka 0 dst

// array asosiatif
// keynya berubah meajadi tipe data string

$siswa = [
    // keynya bisa
    1 => 'arjuna',
    'sipalingcantik' => 'nita',
    'sipalingnetral' => 'ahmad sandi'
];

// echo "siapa yang paling ganteng? {$siswa ['1]}";

// aray multidimension
// ada array di dalam array

$togel = [
    [1,2,3,4,5],//0
    [6,7,8,9,22],//1
  //  0 1 2 3 4  5
    [12,15,13,14,51],//2
    [19,21,31,47,35]//3
];

// cara memnggil array
//echo $togel [2][3];

// array push 
// array push berguna untuk menerima 2 parameter, parameter pertama : untuk target, parameter kedua untuk nilai yang akan dimasukkan 

$sayur = ['bayem','kangkung','sawi'];
$buah = ['pisang','kelapa','coklat'];

// cara pertama untuk menambahkan item
array_push($buah, 'timun');

// cara yang kedua
$sayur[] = 'labu';

echo $buah[3];
echo $sayur[3];

?>