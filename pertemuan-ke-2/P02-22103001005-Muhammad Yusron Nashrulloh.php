<?php
class Laptop {
  public $merk;
  public $tipe;
  public $ukuran_layar;
  public $harga;
  public $tahun_produksi;

  public function hidupkan() {
    echo "Laptop dinyalakan.";
  }

  public function matikan() {
    echo "Laptop dimatikan.";
  }

  public function tampilkan_info() {
    echo "Merk: ".$this->merk."<br>";
    echo "Tipe: ".$this->tipe."<br>";
    echo "Ukuran Layar: ".$this->ukuran_layar."<br>";
    echo "Harga: ".$this->harga."<br>";
    echo "Tahun Produksi: ".$this->tahun_produksi."<br>";
  }
}

// Membuat objek dari class Laptop
$laptop_saya = new Laptop();

// Mengatur nilai property pada objek
$laptop_saya->merk = "Lenovo";
$laptop_saya->tipe = "Ideapad 320";
$laptop_saya->ukuran_layar = 14;
$laptop_saya->harga = 6000000;
$laptop_saya->tahun_produksi = 2020;

// Memanggil method pada objek
$laptop_saya->hidupkan();
echo "<br>";
$laptop_saya->tampilkan_info();
echo "<br>";
$laptop_saya->matikan();
