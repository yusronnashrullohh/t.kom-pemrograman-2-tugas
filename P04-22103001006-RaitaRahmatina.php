<?php
class Motor{

    public $nama = "nama";
    public $merek = "merek";
    public $jumlahRoda = "jumlah roda";
    public $warna = "warna";

    //method
    function __construct($nama, $merek, $jumlahRoda, $warna)
    {
        $this->nama = $nama;
        $this->merek = $merek;
        $this->jumlahRoda = $jumlahRoda;
        $this->warna = $warna;
    }
    public function tambahKecepatan()
    {
        return "Siaap!";
    }
}

class MotorMetic extends Motor{

    public $bensin = 1;

    function $isiBensin(); 
    {
        return $this->bensin = 15 liter;
    }
}

$motor1 = new Motor("Motor Metic", "Beat", "Vario", "Scoopy");

$motor1 = new MotorMetic();
echo $bensin1->detail($motor1);