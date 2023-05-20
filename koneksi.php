<?php
// isi nama host, username mysql, dan password mysql anda
mysql_connect("localhost","root","xxx");

if($host) {
	echo "Anda berhasil terhubung.<br/>";
}else{
	echo "koneksi gagal.</br>";
}

//isikan dengan nama database yang akan di hubungkan
mysql_select_db("konekdb");

if($db) {
	echo "Database berhasil terhubung.";
}else{
	echo "Database gagal terhubung.";
}
?>