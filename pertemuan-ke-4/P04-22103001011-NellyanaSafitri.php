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
class durian extends Buah
{
    public $kondisi;
    function __construct($nama, $rasa, $kondisi, $jenis = 0){
        parent::__construct($nama, $rasa);
        $this->kondisi = $kondisi;
    }
    function getData(){
        return parent::getData() . " - {$this->kondisi} masak";
    }
    function beliBuah(){
        return "pilih masak";
    }
}
class kelapa extends Buah
{
    public $jenis;
    function __construct($nama, $rasa, $jenis = "muda"){
        parent::__construct($nama, $rasa);
        $this->jenis = $jenis;
    }

    function getData(){
        return parent::getData() . " - {$this->kondisi} masak";
    }
    function petikBuah(){
        return "yang muda";
    }
}


$buah1 = new Durian("Durian", "enak", "kasongan");

$buah2 = new Kelapa("kelapa", "segar", "muda");


//echo $buah1->getData();
echo $buah2->getData();