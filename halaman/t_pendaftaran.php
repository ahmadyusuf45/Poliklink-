<?php
	include "../konek/class.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Daftar Pendaftaran <button class="btn btn-primary" id="btn-kanan" onclick="modal('modal/pendaftaran.php','tampil');">Tambah Data</button></h1>
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal Pendaftaran</th>
				<th>Nama Dokter</th>
				<th>Nama Pasien</th>
				<th>Jenis Poliklinik</th>
				<th>Biaya</th>
				<th>Status Pasien</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php
		$tmp = $proses->tampil("pendaftaran.kode_pendaf,
			pendaftaran.tgl_pendaf,
			dokter.nama_dkt,
			pasien.nama_psn,
			poliklinik.nama_plk,
			pendaftaran.biaya,
			pendaftaran.status_pasien,
			pendaftaran.keterangan
			","pendaftaran,dokter,pasien,poliklinik","WHERE pendaftaran.kode_dkt = dokter.kode_dkt AND pasien.kode_psn = pendaftaran.kode_psn AND pendaftaran.kode_plk = poliklinik.kode_plk");
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
				<td><?php echo $data[7]; ?></td>
				<td>
					<button onclick="hapus_pendaftaran('<?php echo $data[0]; ?>')" class="btn btn-danger">Hapus</button>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>

</div>
</body>
</html>