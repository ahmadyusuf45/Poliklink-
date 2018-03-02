<?php
	include "../konek/class.php";
	$hapus = $proses->hapus("detail_resep","kode_detail = '$_GET[kode_detail]'");
	echo "berhasil";
?>