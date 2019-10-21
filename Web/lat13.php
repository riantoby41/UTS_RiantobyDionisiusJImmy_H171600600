<?php
$judul=$_GET['judul'];
$koneksi=new mysqli("localhost","root","","trpl4c");
if($koneksi->connect_error){
	echo "koneksi gagal";
}
$sql="delete from berita where judul='$judul'";
$koneksi->query($sql);
header("location:lat10.php");
?>