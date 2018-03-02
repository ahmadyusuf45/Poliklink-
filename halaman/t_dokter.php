<?php
	include "../konek/class.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Daftar Dokter <button class="btn btn-primary" onclick="modal('modal/dokter.php','tampil')" id="btn-kanan">Tambah Data</button></h1>
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Dokter</th>
				<th>Spesialis</th>
				<th>Alamat</th>
				<th>Nomor Telepon</th>
				<th>Jenis Poliklinik</th>
				<th>Tarif</th>
				<th style="width: 15%">Action</th>
			</tr>
		</thead>
		<?php
		$tmp = $proses->tampil("dokter.kode_dkt,dokter.nama_dkt,dokter.spesialis_dkt,dokter.alamat_dkt,dokter.tlp_dkt,poliklinik.nama_plk,dokter.tarif","dokter,poliklinik","WHERE dokter.kode_plk = poliklinik.kode_plk");
		$no = 0;
		foreach ($tmp as $data) { $no++
		?>
		<tbody>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data[1]; ?></td>
				<td><?php echo $data[2]; ?></td>
				<td><?php echo $data[3]; ?></td>
				<td><?php echo $data[4]; ?></td>
				<td><?php echo $data[5]; ?></td>
				<td>Rp.<?php echo $data[6]; ?></td>
				<td>
					<button class="btn btn-info" onclick="t_edit_dokter('<?php echo $data[0]; ?>')">Edit</button>
					<button class="btn btn-danger" onclick="hapus_dokter('<?php echo $data[0]; ?>')">Hapus</button>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</div>
</body>
</html>