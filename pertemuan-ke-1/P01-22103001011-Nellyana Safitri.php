<?php
// kode ini merupakan contoh variabel
$nama = "Nellyana";
$hobi = "Memasak";
echo "Hai perkenalkan nama saya " , $nama , " dan hobi saya " , $hobi
?>

<?php
// kode ini merupakan contoh operator
$a = 10;
$b = 5;
echo $a + $b; //penjumlahan
echo $a - $b; //pengurangan
echo $a * $b; //perkalian
echo $a / $b; //pembagian
echo $a % $b; //modulus (sisa pembagian)
?>

<?php
//kode ini merupakan contoh penulisan array
$numbers = [1, 2, 3, 4, 5];
?>

<?php
//kode ini merupakan contoh penulisan struktur logika (IF ELSE)
$nilai = 80;

if ($nilai >= 75) {
  echo "Dibawah KKM.";
} else {
  echo "Diatas KKM.";
}
?>

<?php
//kode ini merupakan contoh perulangan
for ($a = 10; $a <= 20 ; $a++) {
    echo $a;
  }