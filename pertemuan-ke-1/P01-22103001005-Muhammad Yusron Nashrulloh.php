<?php
//kode dibawah ini merupakan contoh variabel
$nama = "Yusron";
$umur = 19;
echo "Halo, nama saya " . $nama . " dan saya berumur " . $umur . " tahun.";
?>

<?php
//kode dibawah ini merupakan contoh operator
$a = 10;
$b = 5;
echo $a + $b; //penjumlahan
echo $a - $b; //pengurangan
echo $a * $b; //perkalian
echo $a / $b; //pembagian
echo $a % $b; //modulus (sisa pembagian)
?>

<?php
//kode dibawah ini merupakan contoh penulisan array
$numbers = [1, 2, 3, 4, 5];
?>

<?php
//kode dibawah ini merupakan contoh penulisan struktur logika (IF ELSE)
$buah = "asam";

if ($buah >= "kedondong") {
  echo "buah manis.";
} else {
  echo "buah asam.";
}
?>

<?php
//kode dibawah ini merupakan contoh perulangan
for ($a = 6; $a <= 10 ; $a++) {
    echo $a;
  }
  