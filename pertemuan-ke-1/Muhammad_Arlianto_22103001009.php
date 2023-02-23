//Penulisan variable pada php
<br>
<?php
$main = "Mobile Legend";

echo $main 

?>
<br>
//penulisan operator pada php
<br>
<?php
$angka1 = 1;
$angka2 = 2;

echo $angka1 + $angka2

?>
<br>
//penulisan array pada php
<br>
<?php
$angka1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
var_dump($angka1)
?>
<br>
//penulisan struktur logika(IF ELSE) pada php
<br>
<?php
$z = 30;
if($z==20){
    echo "you alright";
} elseif($z<20) {
    echo "greater than your number";
}
else {
echo "so far from real number";
}

?>
<br>
//penulisan perulangan pada php
<br>
<?php
$x = 4;
for($x = 0; $x < 5; $x++) {
        echo "Hello World for! <br>";
}
$y = 0;
while($y < 5){
    echo "Hello World while! <br>";
    $y++;
}

?>