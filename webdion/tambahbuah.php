<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$harga = $_POST['harga'];
 
mysqli_query($koneksi, "INSERT INTO daftarbuah VALUES('','$nama','$harga')");
 
header("location:daftarbuah.php");
?>