<?php
class Perumahan{
    // properti
    public $nama = "BTN";
    public $alamat = "Jl Kecipir";
    public $jenis = "Subsidi";
    public $harga = 164000000;
    public $devoloper = "PT Berkah Mandiri";
    // method
    function lokasi(){
        return "Lumayan Strategis,pak";
    }
    function jumlahUnit(){
        return "sepuluh buah,pak";
    }
    function fasilitas(){
        return "Dua kamar tidur satu toilet,pak";
    }
}
$rumah = new Perumahan();
var_dump($rumah);

echo $rumah->nama;
echo $rumah->jumlahUnit();
echo $rumah->lokasi();
echo $rumah->fasilitas();