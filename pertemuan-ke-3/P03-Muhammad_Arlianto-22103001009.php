<?php
class Mobil{
    // properties
    public $nama;
    public $merk;
    public $bahanBakar;
    public $harga;
    public $asalPabrikan;

    // methods
    function __construct($mobil){
        $this->nama = $mobil;
    }
    public function kecepatan() {
        return "300 km/jam";
    }

}
class DetailMobil
{
    public function detail(Mobil $mobil)
        {
            return $mbl = "{$mobil->nama} | {$mobil->kecepatan()}";
        }
}


$mobil1 = new Mobil("Nascar", "Nascar");
$detail1 = new DetailMobil();
echo $detail1->detail($mobil1);

