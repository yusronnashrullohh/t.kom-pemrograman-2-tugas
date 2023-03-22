<?php

class Mobil
	{
	    public $nama;
	    public $merk;
	    public $bahanBakar;
        public $warna;
        function __construct($nama = "nama", $merk = "merk", $bahanBakar = "Bahan Bakar", $warna = "Warna")
        {
            $this->nama = $nama;
            $this->merk = $merk;
            $this->bahanBakar = $bahanBakar;
            $this->warna = $warna;
        }

	    public function matikanMesin()
	    {
            return "Baik yang";
	    }

	}
    class DetailMobil {
        function detail ($mobil){
            return "{$mobil->nama} dan {$mobil->merk}";
        }
    }

	$mobil1 = new Mobil("jazz", "Honda", "merah");
    $detail2 = new DetailMobil();

    echo $detail2->detail($mobil1);
    var_dump($mobil1);