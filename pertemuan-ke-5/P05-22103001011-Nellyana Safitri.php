<?php

class Buah{
    private $nama;
    private $rasa;
    private $kondisi;
    private $jenis;

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

    function getAllData(){
        if ($this->kondisi > 0){
            return "{$this->nama} | {$this->rasa} - {$this->kondisi} Antalagi";
        } elseif ($this->jenis > 0){
            return "{$this->nama} | {$this->rasa} - {$this->jenis} Otakudang";
        }
    }
    function getRasa()
    {
        return "$this->nama | $this->rasa";
    }
    function setRasa($rasa, $nama)
    {
       $this->rasa = $rasa; 
       $this->nama = $nama;
    }
}
class Rambutan extends Buah
{
    function hargaBuah(){
        return "satu ikat Rp 5000";
    }
}
class Durian extends Buah
{
    function beliBuah(){
        return "oke deh";
    }
}


$buah1 = new Rambutan("Rambutan", "kecut", "mentah" , "antalagi");

$buah2 = new Durian("Durian", "Manis", "masak", "Otakudang");




$buah1->setRasa("Kecut", "Rambutan");

$buah2->setRasa("Manis", "Durian");


echo $buah1->getRasa();
echo $buah1->getAllData();
echo $buah2->getRasa();
echo $buah2->getAllData();
