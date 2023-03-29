<?php
class Mobil {
    public $nama;
    public $merk;
    public $warna;
    public $jumlahRoda;
    public $jumlahPemumpang;

    function __construct($nama = "nama", $merk = "merk", $warna = "warna", $jumlahRoda = "jumlahRoda", $jumlahPemumpang = "jumlahPenumpang"){
        $this->nama = $nama;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->jumlahRoda = $jumlahRoda;
        $this->jumlahPenumpang = $jumlahPemumpang;
    }

    public function tambahKecepatan(){
        return "siap Komandan";
    }
}

class detailMobil {
    function detail(Mobil $mobil){
        return "{$mobil->nama} namanya {$mobil->merk} berwarna {$mobil->warna} rodanya {$mobil->jumlahRoda} penumpangnya {$mobil->jumlahPenumpang}";
    }
}
$mobil1 = new Mobil("Mobil Listrik", "Zass", "biru", 4, 4);
$detail = new detailMobil();

echo $detail->detail($mobil1);