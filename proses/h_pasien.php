<?php
	include "../konek/class.php";
	$hapus = $proses->hapus("pasien","kode_psn = '$_GET[kode_psn]'");
	echo "berhasil";
?>