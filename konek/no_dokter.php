<?php
	mysql_connect("localhost","root","");
	mysql_select_db("db_poliklinik");

	$qr = "SELECT max(kode_dkt) as maxKode FROM dokter";
	$hs = mysql_query($qr);
	$dt = mysql_fetch_array($hs);
	$kb = $dt['maxKode'];

	$nu = (int) substr ($kb, 3, 3);
	$nu++;

	$char = "DKT";
	$newid = $char . sprintf("%03s",$nu);
?>