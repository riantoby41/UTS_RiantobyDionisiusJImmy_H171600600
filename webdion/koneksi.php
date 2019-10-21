<?php

$koneksi = new mysqli("localhost","root","","databasedion");
if ($koneksi -> connect_error){
	echo"koneksi gagal";
}
?>