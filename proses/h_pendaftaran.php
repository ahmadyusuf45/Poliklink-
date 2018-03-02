<?php
	include "../konek/class.php";
	$hapus = $proses->hapus("pendaftaran","kode_pendaf = '$_GET[kode_pendaf]'");
	echo "berhasil";
?>