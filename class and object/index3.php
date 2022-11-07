<?php
// class smkjp1

class smkjp1{
    // properti
    var $guru;
    var $murid;

    //function berdiri
    function berdiri(){
        return "berdiri dengan tegap";
    }

    function berlari(){
        return "berlari 1000 langkah";
    }
}
//intansiasi
$sekolah = new smkjp1();

//eksperimen mengakses class dengan berbeda objek
$smkjpone = new smkjp1();

// isi property
$sekolah->guru = "pak saipul";
$sekolah->murid = "Ahmad K";

// tampilkan
echo $sekolah->guru," ",$sekolah->berdiri();
echo "<br />";
echo $sekolah->murid," ",$sekolah->berlari();
echo "<br />";

//tampilkan dari objek $smkjpone
echo $smkjpone->guru," ",$sekolah->berdiri();
echo "<br />";
echo $smkjpone->murid," ",$sekolah->berlari();
echo "<br />";

// tampilkan dari objek $smkjp1

?>