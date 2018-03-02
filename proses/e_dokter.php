<?php
	include "../konek/class.php";
	$edit = $proses->edit("dokter","
		nama_dkt = '$_POST[nama_dkt]',
		spesialis_dkt = '$_POST[spesialis_dkt]',
		alamat_dkt =  '$_POST[alamat_dkt]',
		tlp_dkt =  '$_POST[tlp_dkt]',
		kode_plk = '$_POST[kode_plk]',
		tarif = '$_POST[tarif]'
		","kode_dkt = '$_POST[kode_dkt]'");
	echo "berhasil";
?>