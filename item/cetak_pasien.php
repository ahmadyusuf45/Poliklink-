<?php
	include "../konek/class.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="skin-cetak">
	<div class="title-cetak">
		<img src="../img/logo.png">
	</div>
	<?php 
	$tmp = $proses->tampil("*","pasien","WHERE kode_psn = '$_GET[kode_psn]'");
	$data = $tmp->fetch();
	 ?>
	<div class="content-cetak">
		<table>
			<tr>
				<td>Kode Pasien</td>
				<td>:</td>
				<td><?php echo $data[0]; ?></td>
			</tr>
			<tr>
				<td>Nama Pasien</td>
				<td>:</td>
				<td><?php echo $data[1]; ?></td>
			</tr>
			<tr>
				<td>Alamat Pasien</td>
				<td>:</td>
				<td><?php echo $data[2]; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo $data[3]; ?></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><?php echo $data[4]; ?> Tahun</td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td>:</td>
				<td><?php echo $data[5]; ?></td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	window.load = b_print();
	function b_print(){
		window.print();
	}
</script>
<script type="text/javascript" src="../js/jquery.js"></script>
<style type="text/css">
	.skin-cetak{
		width: 35%;
		margin: 0px auto;
		height: auto;
	}
	.title-cetak{
		width: 100%;
		height: auto;
		border :1px solid #000;
	}
	.title-cetak img{
		width: 70%;
		margin-left: 70px;
	}
	.content-cetak{
		width: 100%;
		height: auto;
		border: 1px solid#000;
	}
	.content-cetak table{
		width: 100%;
		margin: 0px auto;
	}
</style>