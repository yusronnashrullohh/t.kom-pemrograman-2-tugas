<?php
 //constant define
 define ("RASA" ,"manis");
 define ("KEADAAN" ,"matang");
class Buah{
    // Static Keyword property
    public static $nama ="anggur";
    public static $warna = "ungu";
    public static $berasal = "indonesia";
    public static $ukuran ="besar"; 
    public static $bentuk = "bulat";
    //constant const 
    const RASA = "manis";
    const KEADAAN = "matang";
        // Static Keyword method
  public static function akan()
    {
        return " siap";
    }
       // Static Keyword method
    public static function apa()
    {
        return " di makan";
    }
}
// pemanggilan Static Keyword property
echo Buah::$nama;
echo " ";
echo Buah::$warna;
echo " dari ";
echo Buah::$berasal;
echo " ukuran ";
echo Buah::$ukuran;
echo "  berbentuk ";
echo Buah::$bentuk;
echo " ";
// pemanggilan constant define
echo RASA;
echo " ";
echo KEADAAN;
// pemanggilan Static Keyword method
echo Buah::akan();
echo Buah::apa();
echo "<br/>";
// pemanggilan constant const 
$b = new Buah();
echo $b::RASA;
echo " ";
echo $b::KEADAAN;
// var_dump();




// echo __LINE__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";
// echo __DIR__;
// echo "<br>";
// echo __FUNCTION__;