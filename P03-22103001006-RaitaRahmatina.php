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

class DetailMotor{

    public function detail (Motor $motor){
        return $motor1 ="$motor->nama";
    }
}

$motor1 = new Motor("Motor Metic", "Beat", "Vario", "Scoopy");

$detail1 = new DetailMotor ();
echo $detail1->detail($motor1);