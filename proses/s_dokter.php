<?php
	include "../konek/class.php";
	$simpan = $proses->simpan("dokter","
		'$_POST[kode_dkt]',
		'$_POST[nama_dkt]',
		'$_POST[spesialis_dkt]',
		'$_POST[alamat_dkt]',
		'$_POST[tlp_dkt]',
		'$_POST[kode_plk]',
		'$_POST[tarif]'
		");
	echo "berhasil";
?>