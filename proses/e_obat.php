<?php
	include "../konek/class.php";
	$edit = $proses->edit("obat","
		nama_obt = '$_POST[nama_obt]',
		jenis_obt = '$_POST[jenis_obt]',
		kategori_obt = '$_POST[kategori_obt]',
		harga_obt = '$_POST[harga_obt]',
		jml_obt = '$_POST[jml_obt]'
		","kode_obt = '$_POST[kode_obt]'");
	echo "berhasil";
?>