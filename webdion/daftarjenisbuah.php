<?php
session_start();
?>
<head>
	<thead>

	<table border = 3px>
	<tr>
		<td> No </td>
		<td> Nama Jenis</td>
		<td> Tindakan </td>
	
	</tr>
	</thead>
<tbody>

	<tr>
<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($koneksi, "SELECT * FROM jenisbuah") or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td>
				<a class="edit" href="editjenisbuah.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapusjenisbuah.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</tr>

	<form action="tambahjenisbuah.php" method="POST">
	<table>
	<br><b> Tambah Data Buah </b>
		<tr><td> Masukkan Buah </td>
			<td> : <input type = "text" id="nama" name="nama"> </td></tr>


	
		<tr><td colspan=2><a href="daftarjenisbuah.php" type="button"><input type="submit" name="submit" value="Simpan"></a>

		<br><center><a href="dion.php">Beranda</a>
	</tr>
		
		</tbody>
		</table>	
