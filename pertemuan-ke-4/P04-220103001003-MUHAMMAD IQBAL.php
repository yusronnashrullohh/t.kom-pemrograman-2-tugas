<?php

class Buah{
    public $nama;
    public $berasal;
    public $rasa;
    public $kwh;

    function __construct($nama = "nama", $berasal = "merk", $rasa = "rasa", $kwh = "kwh")
    {
        $this->nama = $nama;
        $this->berasal = $berasal;
        $this->rasa = $rasa;
        $this->kwh = $kwh;
    }
    function getData()
    {
        return "$this->nama, $this->berasal";
    }

    function getAllData(){
        if ($this->rasa > 0){
            return "{$this->nama} | {$this->berasal} - rasanya {$this->rasa} dimakan <br/>";
        } elseif ($this->kwh > 0){
            return "{$this->nama} | {$this->berasal} - rasanya {$this->kwh} dimakan";
        }
    }
}
class Manis extends Buah
{
    function isiBensin(){
        return "isi bensin nya dong";
    }
}
class Asem extends Buah
{
    function isiBatrai(){
        return "isi batrai nya dong";
    }
}


$trans1 = new Manis("kurma", 
"arab", "enak" , 180);
$trans2 = new Asem("mangga", 
"indonesia", 0, "tidak enak");

echo $trans1->getAllData();
echo $trans2->getAllData();

// var_dump();