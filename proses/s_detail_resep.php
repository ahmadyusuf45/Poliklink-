<?php
	include "../konek/class.php";
	$qw = $proses->tampil("*","obat","WHERE kode_obt = '$_POST[kode_obt]'");
	$item = $qw->fetch();
	$jml_obat = $item['jml_obt']-$_POST['jml_beli'];
	$e_obat = $proses->edit("obat","jml_obt = $jml_obat"," kode_obt = '$_POST[kode_obt]' ");
	$s_detail_resep = $proses->simpan("detail_resep","
		'',
		'$_POST[kode_rsp]',
		'$_POST[kode_obt]',
		'$_POST[harga]',
		'$_POST[jml_beli]',
		'$_POST[dosis]',
		'$_POST[total]'
		");
	echo "berhasil";
?>