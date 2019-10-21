<?php
$kirim=$_GET['kirim'];
if(isset($kirim)){
	$judul=$_GET['judul'];
}
//echo $judul;
$koneksi=new mysqli("localhost","root","","trpl4c");
if($koneksi->connect_error){
	echo "koneksi gagal";
}
$sql="insert into berita(judul) values('$judul')";
$koneksi->query($sql);
header("location:lat10.php");
?>