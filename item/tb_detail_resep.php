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
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Resep</th>
			<th>Nama Obat</th>
			<th>Harga</th>
			<th>Jumlah Obat</th>
			<th>Dosis</th>
			<th>Total Harga</th>
			<th>Action</th>
		</tr>
	</thead>
	<?php
	$tmp = $proses->tampil("detail_resep.kode_detail,
		detail_resep.kode_rsp,
		obat.nama_obt,
		obat.harga_obt,
		detail_resep.jml_beli,
		detail_resep.dosis,
		detail_resep.total
		","obat,detail_resep","WHERE obat.kode_obt = detail_resep.kode_obt AND detail_resep.kode_rsp ='$newid'");
	$no = 0;
	foreach ($tmp as $data) {$no++;
	?>
	<tbody>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data[1]; ?></td>
			<td><?php echo $data[2]; ?></td>
			<td><?php echo $data[3]; ?></td>
			<td><?php echo $data[4]; ?></td>
			<td><?php echo $data[5]; ?></td>
			<td><?php echo $data[6]; ?></td>
			<td>
				<button class="btn btn-danger" onclick="hapus_detail_resep('<?php echo $data[0]; ?>')">Hapus</button>
			</td>
		</tr>
	</tbody>
	<?php } ?>
</table>
<?php
	$qw = $proses->tampil("SUM(detail_resep.total)","detail_resep","WHERE kode_rsp = '$newid' ");
	$total = $qw->fetch();
	$sub_total = $total[0];
	?>
	<div class="form-inline">
		<div class="form-group">
			<p>Sub Total</p>
			<input type="text" class="form-control" value="<?php echo $sub_total ?>" id="sub_total" name="">
		</div>
		<div class="form-group">
			<p>Bayar</p>
			<input type="text" id="bayar" onkeyup="bayar_resep()" class="form-control" name="">
		</div>
		<div class="form-group">
			<p>Kembali</p>
			<input type="text" id="kembali" class="form-control" name="">
			<button class="btn btn-primary" onclick="simpan_resep()">Simpan</button>
		</div>
	</div>
</body>
</html>