<?php

class Mobil
	{
	    // data atau property
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

	    // perilaku atau method
	    public function hidupkanMesin()
	    {
            return "Baik bang!, Hidup!!";
	    }

	}
//detail
    class DetailMobil {
        function detail ($mobil){
            return "{$mobil->nama} dan {$mobil->merk}";
        }
    }


	// instance object
	$mobil1 = new Mobil("Furtuner", "Toyota", "Dexlite", "Hitam");
    $detail2 = new DetailMobil();

    echo $detail2->detail($mobil1);
    var_dump($mobil1);