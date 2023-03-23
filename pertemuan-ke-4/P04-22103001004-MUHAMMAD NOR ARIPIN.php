<?php

class Buah{
    public $nama;
    public $warna;
    public $bentuk;
    public $manis;
    public $pahit

    function __construct($nama = "nama", $warna = "warna", $bentuk = "bentuk", $manis = "manis", $pahit = "pahit")
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->bentuk = $bentuk;
        $this->manis = $manis;
        $this->pahit = $pahit;
    }
    function getData()
    {
        return "$this->nama, $this->warna, $this->bentuk, $this->manis, $this->pahit";
    }

    // function getAllData(){
    //     if ($this->manis > 0){
    //         return "{$this->nama} | {$this->warna} - {$this->bentuk} | {$this->manis} manis";
    //     } elseif ($this->pahit > 0){
    //         return "{$this->nama} | {$this->warna} - {$this->bentuk} - {$this->manis} manis";
    //     }
    // }
}
class Manis extends Buah
{
    function __construct($nama = "nama", $warna = "warna", $bentuk = "bentuk", $manis = 0%, $pahit = 0%){
        parent:: __construct($nama, $merk);
        $this->pahit = $pahit;
    }
    function getData(){
        return parent::getData(). "{$this->manis} manis";
    }
    
}
class Pahit extends Buah
{
    function __construct($nama = "nama", $warna = "warna", $bentuk = "bentuk", $manis = 0%, $pahit = 0%){
        parent:: __construct($nama, $merk);
        $this->manis = $manis;
    }
    function getData(){
        return parent::getData(). "{$this->pahit} pahit";
    }
}

$buah1 = new Manis("pisang", "kuning", "panjang", 100%, 0%);
$buah2 = new Pahit("Asam", "hijau", "bulat", 0%, 100%);

echo $buah1->getData();