<?php
	include "../konek/class.php";
	$hapus = $proses->hapus("pembayaran","kode_byr = '$_GET[kode_byr]'");
	echo "berhasil";
?>