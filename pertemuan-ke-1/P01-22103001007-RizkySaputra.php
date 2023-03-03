<?php
//contoh penulisan variabel pada PHP
$username ="Rizky123";
$password =12345;
echo $password
?>
<?php
//contoh penulisan operator pada PHP
$a = 10;
$b = 6;
echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;
echo $a ** $b;
?>
<?php
//contoh penulisan Array pada PHP
$array = array(
    1=>"Rizky",
    2=>"Raita",
    3=>"Parhan",
    4=>"Nelly",
    5=>"Yusron");
echo $array[3];
//Contoh Penulisan Struktur Logika (IF ELSE) pada PHP
$username ="Rizky123";
if ($username =="Rizky123"){
    echo "Selamat Datang Rizky ...";
    echo "Anda memiliki 3 notifikasi ...";
}
else {
    echo "Maaf, Anda tidak memiliki hak akses";
}
//contoh perulangan pada PHP
//perulanngan for
for($i = 0; $i < 10; $i++){
    echo "<h2>for-$i</h2>";
}
//perulangan while
$repeat = 0;
while($repeat < 10){
    echo "<p>while-$repeat</>";
    $repeat++;
}
//perulangan Do/While
$Balik = 10;
do {
    echo "<p>Do/While-$Balik</p>";
    $Balik--;
} while ($Balik > 0);
//perulangan Foreach
$nama = [
    "Rizky",
    "Parhan",
    "Yusron",
    "Iqbal"
];
echo "<h5>Nama Teman TK:</h5>";
echo "<ul>";
foreach($nama as $name){
    echo "<li>$name</li>";
}
echo "</ul>";
//perulangan bersarang
$i = 0;
while($i < 10){
    for($j = 0; $j < 10; $j++){
        echo "Bersarang ($i, $j)<br>";    
    }
    $i++;
}
