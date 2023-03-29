<?php

class Buah{
    public $nama;
    public $rasa;
    public $kondisi;
    public $jenis;

    function __construct($nama = "nama", $rasa = "rasa", $kondisi = "kondisi", $jenis = "jenis")
    {
        $this->nama = $nama;
        $this->rasa = $rasa;
        $this->kondisi = $kondisi;
        $this->jenis = $jenis;
    }
    function getData()
    {
        return "$this->nama, $this->rasa";
    }
}
class Rambutan extends Buah
{
    public $kondisi;
    function __construct($nama, $rasa, $kondisi, $jenis = 0){
        parent::__construct($nama, $rasa);
        $this->kondisi = $kondisi;
    }
    function getData(){
        return parent::getData() . " - {$this->kondisi} matang";
    }
    function petikBuah(){
        return "pilih yang matang";
    }
}
class Mangga extends Buah
{
    public $jenis;
    function __construct($nama, $rasa, $jenis = "Gadung"){
        parent::__construct($nama, $rasa);
        $this->jenis = $jenis;
    }

    function getData(){
        return parent::getData() . " - {$this->kondisi} matang";
    }
    function naikPohon(){
        return "ambil buah nya";
    }
}


$buah1 = new Rambutan("Rambutan", "Manis", "Garuda");

$buah2 = new Mangga("Mangga", "Manis", "Gadung");


//echo $buah1->getData();
echo $buah2->getData();
// var_dump();