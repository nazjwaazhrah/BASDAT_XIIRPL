<?php

require_once 'fungsi-pesan-error.php';


function validasi(array $listinput){
    // validasi berisi inputan form
    $request = $_REQUEST;

    // perulangan untuk array terluar (berisi nama input)
    foreach ($listinput as $input => $listrules){
        echo "Periksa Input <strong>{$input}</strong><br>";

        // menggunakan foreach untuk memanggil semua fungsi yang bernama 'lolos'
        foreach($listrules as $rules){
            echo "->rules<strong>{$rules}</strong>:";
            // panggil fungsi yang ada nama lolosnye
            $namafungsi = 'lolos' .ucfirst($rules);
            // validasi sesuai input formnye
            $lolos = $namafungsi ($request[$input]);
            // buatkan bool (Lolos atau tidak lolos)
            echo $lolos ? 'Lolos' : 'Tidak Lolos';
            echo "<br>";
        }
     echo "<br>";
    }
}

function lolosrequired($nilai){
    return(bool)$nilai;
}

// fungsi validasi email
function lolosEmail($nilai){
    return filter_var($nilai,FILTER_VALIDATE_EMAIL);
}

// fungsi lolos username menggunakaan regex
function lolosUsername($nilai){
    preg_match("/^[a-zA-Z0-9]+/", $nilai, $output);
    if(count($output)){
        return $output[0] == $nilai;
    }
    return false;
}

// fungsi lolos usia (harus menggunakan numeric)
function lolosNumeric($nilai){
    return is_numeric($nilai);
}
?>