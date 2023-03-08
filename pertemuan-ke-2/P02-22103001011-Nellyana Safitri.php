<?php
class Handphone {
  public $merk;
  public $tipe;
  public $warna;
  public $ram;
  public $storage;

  public function hidupkan() {
    echo "Handphone dihidupkan.";
  }

  public function matikan() {
    echo "Handphone dimatikan.";
  }

  public function cekStatusBaterai() {
    echo "Baterai handphone tersisa 30%.";
  }
}

$hp_saya = new Handphone();
$hp_saya->merk = "Oppo";
$hp_saya->tipe = "A92";
$hp_saya->warna = "Biru";
$hp_saya->ram = "8 GB";
$hp_saya->storage = "128 GB";

echo "Merk Handphone: " . $hp_saya->merk . "<br>";
echo "Tipe Handphone: " . $hp_saya->tipe . "<br>";
echo "Warna Handphone: " . $hp_saya->warna . "<br>";
echo "RAM Handphone: " . $hp_saya->ram . "<br>";
echo "Storage Handphone: " . $hp_saya->storage . "<br>";

$hp_saya->hidupkan();
echo "<br>";
$hp_saya->cekStatusBaterai();
echo "<br>";
$hp_saya->matikan();
