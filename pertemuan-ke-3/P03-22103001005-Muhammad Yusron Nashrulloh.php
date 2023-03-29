<?php
// membuat class Mobil
class Mobil {
  public $merk;
  public $model;
  public $tahun;
  public $warna;

  public function __construct($merk, $model, $tahun, $warna) {
    $this->merk = $merk;
    $this->model = $model;
    $this->tahun = $tahun;
    $this->warna = $warna;
  }

  public function getInfoMobil() {
    return "Merk: {$this->merk} | Model: {$this->model} | Tahun: {$this->tahun} | Warna: {$this->warna}";
  }
}

// membuat class DetailMobil dengan Object Type Mobil
class DetailMobil {
  public $mobil;

  public function __construct(Mobil $mobil) {
    $this->mobil = $mobil;
  }

  public function getDetailMobil() {
    return "Detail Mobil: " . $this->mobil->getInfoMobil();
  }
}

// membuat object Mobil
$mobil = new Mobil("Toyota", "Avanza", "2020", "Hitam");

// membuat object DetailMobil dengan menggunakan object Mobil
$detailMobil = new DetailMobil($mobil);

// mencetak detail mobil menggunakan object DetailMobil
echo $detailMobil->getDetailMobil();
