<?php
	include "../konek/class.php";
?>
<link rel="stylesheet" type="text/css" href="../bootstrap_new/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap_new/dist/css/bootstrap-theme.min.css">
<script type="text/javascript" src="../bootstrap_new/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src=".../bootstrap_new/dist/js/bootstrap.js"></script>
<center>
	<h1>Laporan Pembayaran Resep Obat</h1>
	<p><?php echo $_GET['tgl_mulai'] ?> Sampai <?php echo $_GET['tgl_akhir']; ?></p>
</center>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal Resep</th>
				<th>Nama Pasien</th>
				<th>Total Harga Resep</th>
			</tr>
		</thead>
		<?php
		if(isset($_GET['tgl_mulai']) && ($_GET['tgl_akhir'])){
			$tgl_mulai = $_GET['tgl_mulai'];
			$tgl_akhir = $_GET['tgl_akhir'];
			$tmp = $proses->tampil("
			resep.kode_rsp,
			resep.tgl_rsp,
			pasien.nama_psn,
			resep.total_harga
			","resep,pasien","WHERE resep.kode_psn = pasien.kode_psn AND resep.tgl_rsp BETWEEN '$tgl_mulai' AND '$tgl_akhir'");	
			$qw = $proses->tampil("
			SUM(resep.total_harga)
			","resep","WHERE resep.tgl_rsp BETWEEN '$tgl_mulai' AND '$tgl_akhir'");	
		}else{
			$tmp = $proses->tampil("
			resep.kode_rsp,
			resep.tgl_rsp,
			pasien.nama_psn,
			resep.total_harga
			","resep,pasien","WHERE resep.kode_psn = pasien.kode_psn");	
			$qw = $proses->tampil("
			SUM(resep.total_harga)
			","resep","WHERE resep.kode_psn = pasien.kode_psn");	
		}
		$no = 0;
		$jml = $qw->fetch();
		foreach ($tmp as $data) { $no++;
		?>
		<tbody>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data[1]; ?></td>
				<td><?php echo $data[2]; ?></td>
				<td><?php echo $data[3]; ?></td>
			</tr>
		
		<?php } ?>
		<tr>
			<td></td>
				<td></td>
				<td><b>Jumlah total resep</b></td>
				<td><?php echo $jml[0]; ?></td>
		</tr>
		</tbody>
	</table>
	<div class="skin-ttd">
		<div class="content-ttd">
		<br>
			<br>
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
			margin-bottom: 5px;	
		}
		.content-ttd{
			margin: 0px auto;
			width: 30%;
			height: 50px;

		}
		.jml-skin{
			width: 30%;
			margin-left: 65%;
			border: 1px solid#ccc;
			float:left;
			height: 30px;
		}
	</style>
	<script type="text/javascript">
		window.load=b_print();
		function b_print() {
			window.print();
		}
	</script>