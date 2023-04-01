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
class Rambutan extends Buah
{
    function cicipRasa(){
        return "Sangat manis";
    }
}
class Mangga extends Buah
{
    function petikBuah(){
        return "yang matang ya";
    }
}


$buah1 = new Rambutan("Rambutan", "Manis", "Masak" , "Garuda");

$buah2 = new Mangga("Mangga", "Asem", "mentah", "Gadung");




$buah1->setRasa("Manis", "Rambutan");

$buah2->setRasa("Asam", "Mangga");


echo $buah1->getRasa();
echo "<br>";
//echo $buah1->getAllData();
echo $buah2->getRasa();
//echo $buah2->getAllData();
//var_dump ($buah1);
