<?php
	include "../konek/class.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Daftar Obat <button class="btn btn-primary" id="btn-kanan" onclick="modal('modal/obat.php','tampil');">Tambah Data</button></h1>
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Obat</th>
				<th>Jenis Obat</th>
				<th>Kategori</th>
				<th>Harga Obat</th>
				<th>jumlah Obat</th>
				<th style="width: 15%">Action</th>
			</tr>
		</thead>
		<?php
		$tmp = $proses->tampil("*","obat","");
		$no = 0;
		foreach ($tmp as $data) {$no++;
		?>
		<tbody>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data[1]; ?></td>
				<td><?php echo $data[2] ;?></td>
				<td><?php echo $data[3]; ?></td>
				<td>Rp.<?php echo $data[4]; ?></td>
				<td><?php echo $data[5]; ?></td>
				<td>
					<button onclick="t_edit_obat('<?php echo $data[0]; ?>')" class="btn btn-info">Edit</button>
					<button onclick="hapus_obat('<?php echo $data[0]; ?>')" class="btn btn-danger">Hapus</button>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</div>
</body>
</html>