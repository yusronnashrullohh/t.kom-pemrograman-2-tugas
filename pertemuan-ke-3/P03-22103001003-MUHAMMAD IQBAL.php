<?php

  class Mobil
	{
        // data atau property
	    public $jenis;
	    public $merek;
        public $warna;
	    public $kecepatan;
         //construktur 
        function __construct($jenis = "jenis", $merek = "merk",
         $warna = "Warna", $kecepatan = "kecepatan")
        {
            $this->jenis = $jenis;
            $this->merek = $merek;
            $this->warna = $warna;
            $this->kecepatan = $kecepatan;
        }

	    // perilaku atau method
	    public function tambahKecepatan()
	    {
            return "inggih kaka !!!, 
            belaju !!!";
	    }
	}

        //detail
    class DetailMobil {
        function detail ($Mobil){
            return "{$Mobil->jenis} 
            merek {$Mobil->merek} 
            berwarna {$Mobil->warna}
            dengan kecepatan {$Mobil->kecepatan}";
        }
    }

	// instance object
	$mobil1 = new Mobil("mobil balap", "lamborghini",
     "putih", "100 Km/jam");
    $detail2 = new DetailMobil();

    echo $detail2->detail($mobil1);
    // var_dump($sepeda1);
 