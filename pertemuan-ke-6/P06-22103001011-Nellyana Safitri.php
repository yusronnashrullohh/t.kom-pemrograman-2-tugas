<?php

define("BUAH", "Rambutan");
define("HARGA", 5000);

class Buah{
    private $nama;
    private $rasa;
    private $kondisi;
    private $jenis;
    public static $namaBuah = "Durian";
    public static $warna = "Kuning";
    public static $beratBuah = "5 kg";
    public static $asalBuah = "kasongan";
    public static $jumlahBuah = "5 Buah";
    const NAMA = "Durian";
    const HARGA = 50000;

    public static function durianApa()
    {
        return "Durian Kasongan";
    }
    public static function bukaBuah()
    {
        return "oke ading";
    }

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
            return "{$this->nama} | {$this->rasa} - {$this->kondisi}";
        } elseif ($this->jenis > 0){
            return "{$this->nama} | {$this->rasa} - {$this->jenis}";
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


echo BUAH;
echo "<br>";
echo HARGA;
echo "<br>";
echo $buah1::NAMA;
echo "<br>";
echo $buah1::HARGA;
echo "<br>";
echo Buah::$namaBuah;
echo "<br>";
echo Buah::$warna;
echo "<br>";
echo Buah::$beratBuah;
echo "<br>";
echo Buah::$asalBuah;
echo "<br>";
echo Buah::$jumlahBuah;
echo "<br>";
echo Buah::durianApa();
echo "<br>";
echo Buah::bukaBuah();
echo "<br>";
echo $buah1->getRasa();
echo "<br>";
echo $buah1->getAllData();
echo "<br>";
echo $buah2->getRasa();
echo "<br>";
echo $buah2->getAllData();
