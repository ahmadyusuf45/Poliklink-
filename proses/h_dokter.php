<?php
	include "../konek/class.php";
	$hapus = $proses->hapus("dokter","kode_dkt = '$_GET[kode_dkt]'");
	echo "berhasil";
?>