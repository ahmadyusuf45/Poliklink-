<?php
	include "../konek/class.php";
	$tm = $proses->tampil("*","dokter,poliklinik","WHERE dokter.kode_plk = poliklinik.kode_plk AND dokter.kode_dkt = '$_POST[kode_dkt]'");
	$hsl = $tm->fetch();
	$ar = array("tarif"=>$hsl['tarif'],"nama_plk"=>$hsl['nama_plk'],"kode_plk"=>$hsl['kode_plk']);
	echo json_encode($ar);
?>