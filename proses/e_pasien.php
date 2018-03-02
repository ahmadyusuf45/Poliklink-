<?php
	include "../konek/class.php";
	$edit = $proses->edit("pasien","
		nama_psn='$_POST[nama_psn]',
		alamat_psn = '$_POST[alamat_psn]',
		gender_psn = '$_POST[gender_psn]',
		umur_psn = '$_POST[umur_psn]',
		tlp_psn = '$_POST[tlp_psn]' 
		","kode_psn = '$_POST[kode_psn]'");
	echo "berhasil";
?>