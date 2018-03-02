<?php
	include "../konek/class.php";
	$hapus = $proses->hapus("obat","kode_obt = '$_GET[kode_obt]'");
	echo "berhasil";
?>