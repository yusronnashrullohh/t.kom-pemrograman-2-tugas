<?php
class Buah {
  private static $namaPembeli = "Mas Udin";
  private static $hargaBuah = 10000;
  private static $daftarBuah = ["apel", "mangga", "jeruk", "durian", "nangka"];
  private static $diskon = 0.1;
  private static $pajak = 0.05;
  
  private $jenis;
  private $rasa;
  
  public static function getNamaPembeli() {
    return self::$namaPembeli;
  }

  public static function setNamaPembeli($namaPembeli) {
    self::$namaPembeli = $namaPembeli;
  }

  public static function getHargaBuah() {
    return self::$hargaBuah;
  }

  public static function setHargaBuah($hargaBuah) {
    self::$hargaBuah = $hargaBuah;
  }

  public static function getDaftarBuah() {
    return self::$daftarBuah;
  }

  public static function getDiskon() {
    return self::$diskon;
  }

  public static function setDiskon($diskon) {
    self::$diskon = $diskon;
  }

  public static function getPajak() {
    return self::$pajak;
  }

  public static function setPajak($pajak) {
    self::$pajak = $pajak;
  }

  public function __construct($jenis, $rasa) {
    $this->jenis = $jenis;
    $this->rasa = $rasa;
  }

  public function getJenis() {
    return $this->jenis;
  }

  public function setJenis($jenis) {
    $this->jenis = $jenis;
  }

  public function getRasa() {
    return $this->rasa;
  }

  public function setRasa($rasa) {
    $this->rasa = $rasa;
  }

  public function getInfo() {
    echo "Buah jenis " . $this->jenis . " memiliki rasa " . $this->rasa . ".";
  }
}


echo Buah::getNamaPembeli(); // Output: Mas Udin
Buah::setNamaPembeli("Mas Udin");
echo Buah::getNamaPembeli(); // Output: Mas Udin

echo Buah::getHargaBuah(); // Output: 10000
Buah::setHargaBuah(12000);
echo Buah::getHargaBuah(); // Output: 12000

$daftarBuah = Buah::getDaftarBuah();
foreach ($daftarBuah as $buah) {
  echo $buah . ", ";
}
// Output: apel, mangga, jeruk, durian, nangka,

echo Buah::getDiskon(); // Output: 0.1
Buah::setDiskon(0.2);
echo Buah::getDiskon(); // Output: 0.2

echo Buah::getPajak(); // Output: 0.05
Buah::setPajak(0.1);
echo Buah::getPajak(); 