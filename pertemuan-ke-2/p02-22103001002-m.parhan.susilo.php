<?php
//$nama = "farhan";
//echo $nama;

class Sepatu{
    public $nama = "sepatu futsal";
    public $merk = "adidas";
    public $bahan = "kulit";
    public $ukuran = 42;
    public $harga = 500000;

    // methods
    function kekuatan(){
        echo "sangat kuat";
    }
    function ketahanan(){
        echo "tidak mudah robek";
    }
    function fungsi(){
        echo "mempercepat lari";
    }
}

$sepatu = new Sepatu();

Var_dump($sepatu);

echo $sepatu->nama;

echo $sepatu ->kekuatan();