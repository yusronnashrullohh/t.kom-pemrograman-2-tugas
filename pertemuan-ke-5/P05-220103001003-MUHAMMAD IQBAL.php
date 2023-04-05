<?php
//parent
class Buah{
    // visibility public
    public $nama;
    // visibility protected 
    protected $warna;
    // visibility private
    private $berasal;

    function __construct($nama = 0, $warna = 0, $berasal = 0)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berasal = $berasal;
    }
   // method untuk setter
    function getData()
    {
        return "{$this->nama}  berwarna {$this->warna} dari {$this->berasal}";
    }
}
        // child
class Manis extends Buah
{
    public $rasa;
    function __construct($nama,$warna,$berasal,$rasa = "enak"){
        parent::__construct($nama,$warna,$berasal);
        $this->rasa = $rasa;
    }
        // method untuk getter
    function getData(){
        return parent::getData() . " sangat {$this->rasa} rasanya <br/>";
    }
}
        // child 
class Asem extends Buah
{
    public $diCicipi;
    function __construct($nama,$warna,$berasal,$diCicipi = "tidak enak"){
        parent::__construct($nama,$warna,$berasal);
        $this->diCicipi = $diCicipi;
    }
            // method untuk getter
    function getData(){
        return parent::getData() . " sangat {$this->diCicipi} rasanya <br/>";
    }
}
$buah1 = new Buah ("pisang",
"hijau", "indonesia");
//pemanggilan method getData untuk visibility 
echo $buah1->getData();
echo "<br/>";
$trans1 = new Manis("kurma","coklat",
"arab","enak");
$trans2 = new Asem("mangga","hijau",
"indonesia","tidak enak");
//pemanggilan method getData dari class Manis untuk visibility 
echo $trans1->getData();
//pemanggilan method getData dari class Asem untuk visibility 
echo $trans2->getData();

// var_dump();