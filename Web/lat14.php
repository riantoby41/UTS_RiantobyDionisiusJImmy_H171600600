<?php
$judul=$ GET['judul'];
$koneksi=new mysql("localhost","root","trpl4c");
if($koneksi->connect_eror){
	echo "koneksi gagal";
}
$sql="select * from berita";
$hasil=$koneksi->query($sql);
foreach ($hasil as $baris){
	
?>
<html>
<body>
<form action="lat12.php"method="GET">
	judul : <input type="text" nama="judul" size="100">
	" value=" <?php echo $baris['judul'; ?>"> <br>
	pengarang : <input type="text" nama="pengarang" size="50">
		echo $baris ['pengarang']; ?> "> <br>
	tulisan : <textarea nama="tulisan" rows="10" cols="100"></textarea>
	 	echo $baris ['tulisan'] ; ?>"> </textarea> <br>
	<input type="submit" nama="kirim" value="KIRIM">

</html>
</body>
</form>

<?php
}
<?