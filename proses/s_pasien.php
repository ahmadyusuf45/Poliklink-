<?php
	include "../konek/class.php";
	$simpan = $proses->simpan("pasien","
		'$_POST[kode_psn]',
		'$_POST[nama_psn]',
		'$_POST[alamat_psn]',
		'$_POST[gender_psn]',
		'$_POST[umur_psn]',
		'$_POST[tlp_psn]'
		");
	echo "berhasil";
?>