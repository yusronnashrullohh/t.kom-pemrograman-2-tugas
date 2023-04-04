<?php

define("BUAH", "Mangga");
define("HARGA", 15000);

class Buah{
    private $nama;
    private $rasa;
    private $kondisi;
    private $jenis;
    public static $namaBuah = "Rambutan";
    public static $warna = "Merah";
    public static $jumlahBuah = "215 Buah";
    public static $jumlahPohon = "5 batang";
    public static $lokasi = "Jl. Perintis Raya";
    const NAMA = "Rambutan";
    const HARGA = 10000;

    public static function PunyaSiapa()
    {
        return "Punya Rizky Saputra";
    }
    public static function usiaPohon()
    {
        return "kurang lebih 3 setengah tahun";
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
echo Buah::$jumlahBuah;
echo "<br>";
echo Buah::$jumlahPohon;
echo "<br>";
echo Buah::$lokasi;
echo "<br>";
echo Buah::punyaSiapa();
echo "<br>";
echo Buah::usiaPohon();
echo "<br>";
echo $buah1->getRasa();
echo "<br>";
echo $buah1->getAllData();
echo "<br>";
echo $buah2->getRasa();
echo "<br>";
echo $buah2->getAllData();
//var_dump ($buah1);