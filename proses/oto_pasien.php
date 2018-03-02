<?php
	include "../konek/class.php";
	$tm = $proses->tampil("*","pasien","WHERE kode_psn = '$_POST[kode_psn]'");
	$hsl = $tm->fetch();
	$ar = array("nama_psn"=>$hsl['nama_psn']);
	echo json_encode($ar);
?>