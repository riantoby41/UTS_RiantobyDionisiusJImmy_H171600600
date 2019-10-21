<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
 
mysqli_query($koneksi, "INSERT INTO daftarjenisbuah VALUES('$nama')");
 
header("location:daftarjenisbuah.php");
?>