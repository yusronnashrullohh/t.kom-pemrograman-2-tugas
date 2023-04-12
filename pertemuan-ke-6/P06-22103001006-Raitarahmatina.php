<?php
class Fruit {
    public static $name = "Mango";
    public static $type = "Arumanis";
    public static $color = "Green";
    public static $taste = "Sweet";
    public static $origin = "Probolinggo"

    public static function MangoFruit(){
        return "Sweet mango from Probolinggo" . self::$name++
    }
}
$mango = new Fruit();
echo $mango->MangoFruit();
echo "Puasa Telah Selesai";
echo Fruit::MangoFruit();
echo "<br>";
echo Fruit::MangoFruit();
echo "<br>";
echo Fruit::MangoFruit();
echo "<br>";
echo Fruit::MangoFruit();
echo "<br>";
echo Fruit::MangoFruit();

echo Fruit = new MangoFruit();
echo Fruit::$name;
define("Name", "Mango");

class Mango {
    // define("Name", "Fruit");
    const HARUMANIS = 3;
}
$Fruit = new Mango();
// echo $b::HARUMANIS;
echo NAME;

