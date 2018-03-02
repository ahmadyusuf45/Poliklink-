<?php
	include "../konek/class.php";
	$s_pendaftaran = $proses->simpan("pendaftaran","
		'$_POST[kode_pendaf]',
		'$_POST[tgl_pendaf]',
		'$_POST[kode_dkt]',
		'$_POST[kode_psn]',
		'$_POST[kode_plk]',
		'$_POST[biaya]',
		'$_POST[status_pasien]',
		'$_POST[keterangan]'
		");
	$jml_bayar = $_POST['tarif']+$_POST['biaya'];
	$s_pembayaran = $proses->simpan("pembayaran","
		'',
		'$_POST[kode_psn]',
		'$_POST[kode_dkt]',
		'$_POST[tgl_pendaf]',
		'$jml_bayar'
		");
	echo "berhasil";
?>