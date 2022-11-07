<?php

// cara membuat function 
function ngoding(){

}

// function bisa di kategorikan menggunakan public, protected, private
class vscode{
    public function coding_php(){

    }
}


// mencoba buat fungsi sapa teman
function sapa_teman(){
    echo "<h1>Hai Gais<h1>";
    echo "<h3>Ketemu lagi bersamaa gueh<h3>";
}

// mencoba membuat fungsi yang ada parameter 
function temen($temen_gueh, $umur){
    echo "<h2>Heyy disini gueh sama {$temen_gueh}<h2>";
    echo "<h2> umur die segini {$umur}<h2>";
}

// cara panggil fungsi
// tuliskan nama fungsinya bersama ()
sapa_teman();

// jika fungsi menggunakan parameter, harus ditulis saat pemanggilannya
temen("caca", 25);

// mencoba membuat fungsi menggunakan percobaan
function kasir($nama, $jumlah){
    echo "<h3>Hai {$nama}, Terimakasih telah berkunjung! <h3>";
    echo "<h3> Jangan Lupa kembali lagi! <h3>";

    //membuat perulangan menggunakan if (jika jumlah  lebih maka akan dapat hadiah )
    if ($jumlah > 10 ) {
        echo "<h3> Gokill, kamu dapat mobil karena telah berkunjung sebanyak {$jumlah} kali <h3>";
    }
}

// panggil fungsi nya dan isi parameternya
kasir("awaddaw", 20);
?>