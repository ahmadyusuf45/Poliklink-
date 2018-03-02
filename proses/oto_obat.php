<?php
	include "../konek/class.php";
	$tm = $proses->tampil("*","obat","WHERE kode_obt = '$_POST[kode_obt]'");
	$hsl = $tm->fetch();
	$ar = array("nama_obt"=>$hsl['nama_obt'],"harga_obt"=>$hsl['harga_obt']);
	echo json_encode($ar);
?>