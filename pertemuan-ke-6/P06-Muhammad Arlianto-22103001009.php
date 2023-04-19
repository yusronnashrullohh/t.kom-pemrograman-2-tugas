//Tanaman Buah Buah
<br>
//Parent and child
<br>
<?php

class Buah{
    public static $nama;

    function __construct($nama="nama")
    {
        self::$nama = $nama;
    }

    public static function getData(){
        return self::$nama;
    }
    public static function getMerk(){
        return self::$nama;
    }
    //setter
    //for value getter call 
    public static function setMerk($nama){
        self::$nama = $nama;
    }
}



class Semangka extends Buah{
    public static $kulitHalus;
    function __construct($nama, $kulitHalus)
    {
       parent::__construct($nama);
       self::$kulitHalus = $kulitHalus;
    }
    public static function getData()
    {
        return parent::getData()." - ". self::$kulitHalus ." Semangka";
    }

}
class Melon extends Buah{
    public static $kulitKasar;
    function __construct($nama, $kulitKasar)
    {
       parent::__construct($nama);
       self::$kulitKasar = $kulitKasar;
    } 
    public static function getData()
    {
        return parent::getData()." - ".self::$kulitKasar ." Melon";
    }
}



$Cucurbitaceae1 = new Semangka("Semangka", "kulit halus");
$Cucurbitaceae2 = new Melon("Melon", "kulit kasar");

echo $Cucurbitaceae1->getData("Semangka", "Kulit Halus");
echo "<br>";
echo $Cucurbitaceae2->getData("Melon", "Kulit Kasar");


?>