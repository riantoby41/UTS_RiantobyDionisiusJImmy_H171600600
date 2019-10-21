<?php

echo "<a href= 'lat11.php' >Tambah Data</a><br>";

$koneksi=new mysqli("localhost","root","","trpl4c");
if ($koneksi->connect_error){
	echo "koneksi gagal";
}else{
	echo "koneksi berhasil";
}
echo"<br><br>";
$sql= "select * from berita";
$hasil=$koneksi->query($sql);
while ($baris=$hasil->fetch_assoc()) {
	echo $baris['judul'],"\t",$baris['pengarang'],"\t",$baris['tulisan'],"<br>";

	echo "<a href='lat13.php'?judul=$baris[judul]> Hapus </a><br>";
}
?>