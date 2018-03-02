<?php
	include "../konek/class.php";
	$edit = $proses->edit("pembayaran","
		jml_byr = '$_POST[jml_byr]'
		","kode_byr = '$_POST[kode_byr]'");
	echo "berhasil";
?>