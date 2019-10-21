<?php
session_start();
?>
<head>
	<thead>

	<table border = 3px>
	<tr>
		<td> No </td>
		<td> Nama Daftar</td>
		<td> Harga </td>
		<td> Tindakan </td>
	
	</tr>
	</thead>
<tbody>

	<tr>
<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($koneksi, "SELECT * FROM daftarbuah") or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td>
				<a class="edit" href="editbuah.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapusbuah.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</tr>

	<form action="tambahbuah.php" method="POST">
	<table>
	<br><b> Tambah Data Buah </b>
		<tr><td> Masukkan Buah </td>
			<td> : <input type = "text" id="nama" name="nama"> </td></tr>

		<tr><td> Masukkan Harga </td>
			<td> : <input type = "text" id="harga" name="harga"> </td></tr>
	
		<tr><td colspan=2><a href="daftarbuah.php" type="button"><input type="submit" name="submit" value="Simpan"></a>

		<br><center><a href="dion.php">Beranda</a>
	</tr>
		
		</tbody>
		</table>	
