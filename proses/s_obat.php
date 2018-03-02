<?php
	include "../konek/class.php";
	$simpan = $proses->simpan("obat","
		'$_POST[kode_obt]',
		'$_POST[nama_obt]',
		'$_POST[jenis_obt]',
		'$_POST[kategori_obt]',
		'$_POST[harga_obt]',
		'$_POST[jml_obt]'
		");
	echo "berhasil";
?>