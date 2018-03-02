<?php
	include "../konek/class.php";
	include "../konek/no_resep.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Pengambilan Resep Obat</h1>
<div class="form-inline">
	<div class="form-group">
		<p>Id Resep</p>
		<input type="text"  name="" id="kode_rsp" value="<?php echo $newid; ?>" class="form-control">
	</div>
	<div class="form-group">
		<p>Tanggal</p>
		<input type="date" class="form-control" id="tgl_rsp" name="">
	</div>
</div>
<div class="form-inline">
	<div class="form-group">
		<p>Id Pasien</p>
		<input type="text" onkeyup="cari_psn()" id="kode_psn"  name="" class="form-control">
	</div>
	<div class="form-group">
		<p>Nama Pasien</p>
		<input type="text"  id="nama_psn" name="" class="form-control">
	</div>
</div>
<div class="form-inline">
	<div class="form-group">
		<p>Kode Obat</p>
		<input type="text" onkeyup="cari_obt()" id="kode_obt" class="form-control" name="">
	</div>
	<div class="form-group">
		<p>Nama Obat</p>
		<input type="text" name="" id="nama_obt" class="form-control">
	</div>
	<div class="form-group">
		<p>Harga Obat</p>
		<input type="text" name="" id="harga_obt" class="form-control">
	</div>
</div>
<div class="form-inline">
	<div class="form-group">
		<p>Jumlah Obat</p>
		<input type="text" onkeyup="jml_obt()" id="jml_beli" class="form-control" name="">
	</div>
	<div class="form-group">
		<p>Dosis Obat</p>
		<input type="text" class="form-control" id="dosis" name="">
	</div>
	<div class="form-group">
		<p>Total</p>
		<input type="text" class="form-control" name="" id="total">
		<button class="btn btn-info" onclick="simpan_detail_resep()">+</button>
	</div>
</div>
<br>
<div class="table-responsive">
	
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function () {
		$(".table-responsive").load('item/tb_detail_resep.php');
	})
</script>