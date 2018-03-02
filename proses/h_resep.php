<?php
	include "../konek/class.php";
	$h_resep = $proses->hapus("resep","kode_rsp = '$_GET[kode_rsp]' ");
	$h_detail_resep = $proses->hapus("detail_resep","kode_rsp = '$_GET[kode_rsp]'");
	echo "berhasil";
?>