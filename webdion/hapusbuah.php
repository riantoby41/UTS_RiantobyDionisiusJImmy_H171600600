<?php
ob_start();
include ("koneksi.php");

$sql="delete from daftarbuah where id='$_GET[id]' ";
$sql2=mysqli_query($koneksi , $sql);
header('location:daftarbuah.php');
?>