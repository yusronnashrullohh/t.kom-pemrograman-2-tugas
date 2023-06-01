<?php

namespace Fruit;

final class Apple {
    public function getColor() {
        return "Green";
    }

    public function __call($name, $argument) {
        echo "Method '$name' not available in Apple Class.";
    }

    public function __toString() {
        return "This is Apple Class";
    }
}

class Grape {
    public function getColor() {
        return "Purple";
    }
}

class Banana {
    public function getColor() {
        return "Yellow";
    }
}

// Fungsi memuat kelas secara otomatis
spl_autoload_register(function ($class_name) {
    // Konversi namespace menjadi path file
    $file_name = str_replace('\\', '/', $class_name) . '.php';
    // Mencoba file kelas ada dan muat
    if (file_exists($file_name)) {
        require_once $file_name;
    }
});

require_once 'init.php';

use Fruit\Apple;
use Fruit\Grape;
use Fruit\Banana;

$apple = new Apple();
$grape = new Grape();
$banana = new Banana();

echo "Apple Color: " . $apple->getColor() . "<br>";
echo "Grape Color: " . $grape->getColor() . "<br>";
echo "Banana Color: " . $banana->getColor() . "<br>";

// Contoh penerapan magic method __call()
$apple->methodNotAvailable();

// Contoh penerapan magic method __toString()
echo $apple;
