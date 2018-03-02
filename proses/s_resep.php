<?php
	include "../konek/class.php";
	$simpan = $proses->simpan("resep","
		'$_POST[kode_rsp]',
		'$_POST[tgl_rsp]',
		'$_POST[kode_psn]',
		'$_POST[total_harga]',
		'$_POST[bayar]',
		'$_POST[kembali]'
		");
	echo "berhasil";
?>