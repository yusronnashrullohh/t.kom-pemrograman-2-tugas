<?php
class Buah {
    public $jenis;
    public $rasa;
  
    public function __construct($jenis, $rasa) {
      $this->jenis = $jenis;
      $this->rasa = $rasa;
    }
  
    public function getInfo() {
      echo "Buah jenis " . $this->jenis . " memiliki rasa " . $this->rasa . ".";
    }
  }
  
  class BuahBerbiji extends Buah {
    public $ukuranBiji;
  
    public function __construct($jenis, $rasa, $ukuranBiji) {
      parent::__construct($jenis, $rasa);
      $this->ukuranBiji = $ukuranBiji;
    }
  
    public function getInfo() {
      echo "Buah berjenis " . $this->jenis . " memiliki rasa " . $this->rasa . " dan ukuran biji sebesar " . $this->ukuranBiji . ".";
    }
  }
  
  class BuahTidakBerbiji extends Buah {
    public $berat;
  
    public function __construct($jenis, $rasa, $berat) {
      parent::__construct($jenis, $rasa);
      $this->berat = $berat;
    }
  
    public function getInfo() {
      echo "Buah berjenis " . $this->jenis . " memiliki rasa " . $this->rasa . " dan berat sebesar " . $this->berat . " gram.";
    }
  }
  
  // Penggunaan class BuahBerbiji
  $buah1 = new BuahBerbiji("mangga", "manis", "sedang");
  $buah1->getInfo(); 
  
  // Penggunaan class BuahTidakBerbiji
  $buah2 = new BuahTidakBerbiji("jeruk", "asam", 100);
  $buah2->getInfo(); 
  