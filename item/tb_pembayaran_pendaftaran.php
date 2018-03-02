<?php
	include "../konek/class.php";
?>
<link rel="stylesheet" type="text/css" href="../bootstrap_new/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap_new/dist/css/bootstrap-theme.min.css">
<script type="text/javascript" src="../bootstrap_new/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap_new/dist/js/bootstrap.js"></script>

<center>
	<h1>Laporan Pembayaran Pendaftaran</h1>
	<p><?php echo $_GET['tgl_mulai'] ?> Sampai <?php echo $_GET['tgl_akhir']; ?></p>
</center>
<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pasien</th>
				<th>Nama Dokter</th>
				<th>Tanggal Bayar</th>
				<th>Jumlah Bayar</th>
			</tr>
		</thead>
		<?php
		if(isset($_GET['tgl_mulai']) && ($_GET['tgl_akhir'])){
			$tgl_mulai = $_GET['tgl_mulai'];
			$tgl_akhir = $_GET['tgl_akhir'];
		$tmp = $proses->tampil("pembayaran.kode_byr,
			pasien.nama_psn,
			dokter.nama_dkt,
			pembayaran.tgl_byr,
			pembayaran.jml_byr
			","pembayaran,pasien,dokter","WHERE pembayaran.kode_psn = pasien.kode_psn AND pembayaran.kode_dkt = dokter.kode_dkt AND pembayaran.tgl_byr BETWEEN '$tgl_mulai' AND '$tgl_akhir' ");
		$qw = $proses->tampil("
			SUM(pembayaran.jml_byr)
			","pembayaran","WHERE pembayaran.tgl_byr BETWEEN '$tgl_mulai' AND '$tgl_akhir' ");
		}else{
			$tmp = $proses->tampil("pembayaran.kode_byr,
			pasien.nama_psn,
			dokter.nama_dkt,
			pembayaran.tgl_byr,
			pembayaran.jml_byr
			","pembayaran,pasien,dokter","WHERE pembayaran.kode_psn = pasien.kode_psn AND pembayaran.kode_dkt = dokter.kode_dkt");
		$qw = $proses->tampil("
			SUM(pembayaran.jml_byr)
			","pembayaran","");
		}
		$no = 0;
		$jml = $qw->fetch();
		foreach ($tmp as $data){$no++;
		?>
		<tbody>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data[1]; ?></td>
				<td><?php echo $data[2]; ?></td>
				<td><?php echo $data[3]; ?></td>
				<td><?php echo $data[4]; ?></td>
			
		<?php } ?>
		</tr>
		<tr>
			<td rowspan="3"></td>
			<td></td>
			<td></td>
			<td><b>Jumlah Pembayaran</b></td>
			<td><?php echo $jml[0] ?></td>
		</tr>
	</tbody>
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
			height: auto;
			
		}
		.content-ttd{
			margin: 0px auto;
			width: 30%;
			height: auto;

		}
		.jml-skin{
			width: 30%;
			margin-left: 65%;
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