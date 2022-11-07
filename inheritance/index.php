<?php
// Pewarisan atau inheritance 

// Class induk
class komputer {
    public $merk;
    public $prosesor;
    public $memory;
    
    // fungsi / operasi membut beli komputer
    public function beli_komputer(){
        return "Beli komputer baru";
}
}

// kelas turunan / extends dari class komputer ke class laptop
class laptop extends komputer {
    public function lihat_spek(){
        // ambil properti dari class computer
        return "merk : $this->merk, prosesor; $this->$prosesor, memory; $this->memory";
    }
}
// intansiasi
// membobjek baru dari class laptop (kelas turunan)
$laptop_baru = new laptop();

//isi propertynya
$laptop_baru->merk = "Asus";
$laptop_baru->prosesor = "AMD Ryzen 9x";
$laptop_baru->memory = "1 PetaByte";

// panggill functionnya 
$laptop_baru->beli_komputer();
echo "<br/>";
$laptop_baru->lihat_spek();

?>