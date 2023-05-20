<?php
/**
* using mysqli_connect for database
*/

$databaseHost = "localhost";
$databaseName = 'crud_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// mengecek koneksi
if (!$mysqli) {
	die("Gagal terhubung: " . mysqli_connect_error());
}
echo "Berhasil terhubung";
mysqli_close($mysqli);

?>