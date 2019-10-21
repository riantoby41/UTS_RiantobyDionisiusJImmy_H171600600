<?php
function namaFungsi(){
      echo "Selamat Datang di TRPL";
}
function tambah($a){
     $hasil=$a+4;
     echo $hasil;
}
function kurang($a, $b){
     $hasil=$a-$b;
     echo $hasil;
}
function kali($a,$b){
     $hasil=$a * $b;
     return $hasil;
}
namaFungsi();
tambah(5);
kurang(5,2);
$data=kali(4,4);
echo $data;
?>