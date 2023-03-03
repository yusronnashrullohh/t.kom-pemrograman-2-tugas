<?php
class Speedboat{
    // properties
    public $nama = "Speedboat";
    public $merk = "Klasiekei";
    public $bahanBakar = "Pertamax";
    public $harga = 105000000;
    public $asalPabrikan = "Italia";

    // methods
    function jenisKendara(){
        echo "Jenis Kendara Air";
    }
    function penggunaan(){
        echo "Bisnis Mengantar penumpang";
    }
    function kecepatan(){
        echo "kecepatan Maksimum 100 km/jam";
    }
}

$speedboat = new Speedboat();

var_dump($speedboat);