<?php
	include "../konek/class.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Laporan Resep Obat
<div class="form-inline" id="btn-kanan">
		<input type="date" id="tgl_mulai" class="form-control"  name="">
		<input type="date" id="tgl_akhir" onchange="cari_lap_resep()" class="form-control" name="">
		<button class="btn btn-primary" onclick="cetak_lap_resep()">Print</button>
</div>
</h1>
<div class="table-responsive">
	
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function () {
	})
</script>