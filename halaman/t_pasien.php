<?php
	include "../konek/class.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Daftar Pasien<button onclick="modal('modal/pasien.php','tampil');" class="btn btn-primary" id="btn-kanan">Tambah Data</button></h1>
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Namma Pasien</th>
				<th>Alamat Pasien</th>
				<th>Jenis Kelamin</th>
				<th>Umur Pasien</th>
				<th>Nomor Telepon</th>
				<th style="width: 20%;">Action</th>
			</tr>
		</thead>
		<?php
		$tmp = $proses->tampil("*","pasien","");
		$no = 0;
		foreach ($tmp as $data) {$no++;
		?>
		<tbody>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $data[1]; ?></td>
				<td><?php echo $data[2]; ?></td>
				<td><?php echo $data[3]; ?></td>
				<td><?php echo $data[4]; ?> Tahun</td>
				<td><?php echo $data[5]; ?></td>
				<td>
					<button class="btn btn-info" onclick="t_edit_pasien('<?php echo $data[0]; ?>')">Edit</button>
					<button class="btn btn-danger" onclick="hapus_pasien('<?php echo $data[0]; ?>')">Hapus</button>
					<button class="btn btn-warning" onclick="cetak_pasien('<?php echo $data[0]; ?>')">Cetak</button>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</div>
</body>
</html>