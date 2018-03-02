<?php 
	include "../konek/class.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Daftar Pembayaran <div class="form-group" id="btn-kanan">
	<input type="text" class="form-control" placeholder="Cari Kode pembayaran" onkeyup="cari_kode_byr()" id="kode_byr" name="">
</div></h1>
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pasien</th>
				<th>Nama Dokter</th>
				<th>Tanggal Bayar</th>
				<th>Jumlah Bayar</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php
		if(isset($_GET['kode_byr'])){
			$kode_byr = $_GET['kode_byr'];
		$tmp = $proses->tampil("pembayaran.kode_byr,
			pasien.nama_psn,
			dokter.nama_dkt,
			pembayaran.tgl_byr,
			pembayaran.jml_byr
			","pembayaran,pasien,dokter","WHERE pembayaran.kode_psn = pasien.kode_psn AND pembayaran.kode_dkt = dokter.kode_dkt AND pembayaran.kode_byr like '%$kode_byr%'");
		}else{
			$tmp = $proses->tampil("pembayaran.kode_byr,
			pasien.nama_psn,
			dokter.nama_dkt,
			pembayaran.tgl_byr,
			pembayaran.jml_byr
			","pembayaran,pasien,dokter","WHERE pembayaran.kode_psn = pasien.kode_psn AND pembayaran.kode_dkt = dokter.kode_dkt");
		}
		$no = 0;
		foreach ($tmp as $data){$no++;
		?>
		<tbody>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data[1]; ?></td>
				<td><?php echo $data[2]; ?></td>
				<td><?php echo $data[3]; ?></td>
				<td><?php echo $data[4]; ?></td>
				<td>
					<button class="btn btn-info" onclick="t_pembayaran('<?php echo $data[0]; ?>')">Bayar</button>
					<button class="btn btn-danger" onclick="hapus_pembayaran('<?php echo $data[0]; ?>')">Hapus</button>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</div>
</body>
</html>