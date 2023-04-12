<?php
class Motor{

    public $nama = "nama";
    protected $merk = "merk";
    public $jumlahRoda = "jumlah roda";
    public $warna = "warna";

    //method
    function __construct($nama, $merk, $jumlahRoda, $warna)
    {
        $this->nama = $nama;
        $this->merk = $merk;
        $this->jumlahRoda = $jumlahRoda;
        $this->warna = $warna;
    }
    function setData($data){
        $this->data = $data;
    }
    function getData($data)
    {
        $this->data;
    }
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }
    public function getMerk($merk)
    {
        $this->merk;
    }
}

class MotorMetic extends Motor{

    function __construct($nama, $merk, $jumlahRoda, $warna){
        parent:: __construct ($nama, $merk, $jumlahRoda, $warna);
        $this->warna = $warna;
    }

    function setWarna($warna){
        $this->warna = $warna;
    }
    function getWarna($warna){
        $this->warna;
    }
}
$motor = new Motor("Motor", "Beat", "Dua", "Biru");
$motorMetic = new MotorMetic ("Beat", "BeatPop", "Dua", "Biru");
echo $motorMetic->setWarna("Biru");
echo "<br>";
echo $motorMetic->getWarna("Biru");
echo "<br>";
var_dump($motorMetic);