<?php
include ("koneksi.php");
$id = $_POST['id'];
$nama = $_POST ['nama'];
$harga = $_POST ['harga'];
$sql="UPDATE daftarbuah SET nama = '$nama', harga = '$harga' WHERE id ='$id' ";
	
$sql2=mysqli_query($koneksi,$sql);
if($sql2) {
	header('location:daftarbuah.php');
}
else {
	echo"gagal";
}

?>
