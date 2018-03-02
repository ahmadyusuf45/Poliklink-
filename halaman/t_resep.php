<?php
	include "../konek/class.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Daftar Resep <button class="btn btn-primary" onclick="panggil('halaman/t_detail_resep.php')" id="btn-kanan">Tambah Data</button></h1>
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal Resep</th>
				<th>Nama Pasien</th>
				<th>Total Harga Resep</th>
				<th>Bayar</th>
				<th>Kembali</th>
				<th style="width: 15%">Action</th>
			</tr>
		</thead>
		<?php
		$tmp = $proses->tampil("
			resep.kode_rsp,
			resep.tgl_rsp,
			pasien.nama_psn,
			resep.total_harga,
			resep.bayar,
			resep.kembali
			","resep,pasien","WHERE resep.kode_psn = pasien.kode_psn");
		$no = 0;
		foreach ($tmp as $data) { $no++;
		?>
		<tbody>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data[1]; ?></td>
				<td><?php echo $data[2]; ?></td>
				<td><?php echo $data[3]; ?></td>
				<td><?php echo $data[4]; ?></td>
				<td><?php echo $data[5]; ?></td>
				<td>
					<button class="btn btn-danger" onclick="hapus_resep('<?php echo $data[0]; ?>')">Hapus</button>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</div>
</body>
</html>