<?php
if (isset($_POST['Input']))
{
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$gapok = $_POST['gapok'];
	$bonus = $_POST['bonus'];
	$a = 0.05;
	$b = 0.1;
	$tunjangan = $gapok * $a;
	$pajak = $gapok * $b;
	echo "===============================<br>";
	echo "NIP : <b>$nip</b><br>";
	echo "Nama pegawai : <b>$nama</b><br>";
	echo "===============================<br>";
	echo "Gaji pokok = <b>Rp. $gapok</b><br>";
	echo "Bonus = <b>Rp. $bonus</b><br>";
	echo "Tunjangan = <b>Rp. $tunjangan</b><br>";
	echo "Pajak = <b>Rp. $pajak</b><br>";
	echo "===============================<br>";
	echo "Gaji yang harus dibayarkan = <b>Rp. " . ($gapok + $bonus + $tunjangan - $pajak) . "</b><br>";
}
?>