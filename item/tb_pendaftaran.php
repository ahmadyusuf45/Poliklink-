<?php
	include "../konek/class.php";
?>
<link rel="stylesheet" type="text/css" href="../bootstrap_new/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap_new/dist/css/bootstrap-theme.min.css">
<script type="text/javascript" src="../bootstrap_new/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap_new/dist/js/bootstrap.js"></script>

<center>
	<h1>Laporan Pendaftaran</h1>
	<p><?php echo $_GET['tgl_mulai'] ?> Sampai <?php echo $_GET['tgl_akhir']; ?></p>
</center>
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
			</tr>
		</thead>
		<?php
		if(isset($_GET['tgl_mulai']) && ($_GET['tgl_akhir'])){
			$tgl_mulai = $_GET['tgl_mulai'];
			$tgl_akhir = $_GET['tgl_akhir'];
			$tmp = $proses->tampil("pendaftaran.kode_pendaf,
			pendaftaran.tgl_pendaf,
			dokter.nama_dkt,
			pasien.nama_psn,
			poliklinik.nama_plk,
			pendaftaran.biaya,
			pendaftaran.status_pasien,
			pendaftaran.keterangan
			","pendaftaran,dokter,pasien,poliklinik","WHERE pendaftaran.kode_dkt = dokter.kode_dkt AND pasien.kode_psn = pendaftaran.kode_psn AND pendaftaran.kode_plk = poliklinik.kode_plk AND pendaftaran.tgl_pendaf BETWEEN '$tgl_mulai' AND '$tgl_akhir'");
		}else{
		$tmp = $proses->tampil("pendaftaran.kode_pendaf,
			pendaftaran.tgl_pendaf,
			dokter.nama_dkt,
			pasien.nama_psn,
			poliklinik.nama_plk,
			pendaftaran.biaya,
			pendaftaran.status_pasien,
			pendaftaran.keterangan
			","pendaftaran,dokter,pasien,poliklinik","WHERE pendaftaran.kode_dkt = dokter.kode_dkt AND pasien.kode_psn = pendaftaran.kode_psn AND pendaftaran.kode_plk = poliklinik.kode_plk");	
		}
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
			</tr>
		</tbody>
		<?php } ?>
	</table>
	<div class="skin-ttd">
		<div class="content-ttd">
			<p>Mengetahui</p>
			<br>
			<br>
			<p>TTD</p>
		</div>
	</div>
	<style type="text/css">
		.skin-ttd{
			float: right;
			width: 30%;
			height: 50px;
			
		}
		.content-ttd{
			margin: 0px auto;
			width: 30%;
			height: 50px;

		}
	</style>
	<script type="text/javascript">
		window.load=b_print();
		function b_print() {
			window.print();
		}
	</script>