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
            return "{$this->nama} | {$this->rasa} - {$this->kondisi} Matang";
        } elseif ($this->jenis > 0){
            return "{$this->nama} | {$this->rasa} - {$this->jenis} Gadung";
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
class Nanas extends Buah
{
    function jumlahBuah(){
        return "Banyak";
    }
}
class Kelapa extends Buah
{
    function naikPohon(){
        return "siap laksanakan";
    }
}


$buah1 = new Nanas("Nanas", "Manis", "Bagus" , "Madu");

$buah2 = new Kelapa("Kelapa", "segar", "Bagus", "Muda");




$buah1->setRasa("Manis", "Nanas");

$buah2->setRasa("segar", "Kelapa");

var_dump ($buah1);
echo "<br>";
echo $buah1->getRasa();
echo "<br>";
echo $buah1->getAllData();
echo "<br>";
echo $buah2->getRasa();
echo "<br>";
echo $buah2->getAllData();