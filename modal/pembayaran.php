<?php
	include "../konek/class.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$onclick  = "bayar('$id')";
	}else{
		$id = "";
	}
	$qw = $proses->tampil("pembayaran.tgl_byr,pasien.nama_psn,dokter.nama_dkt,pembayaran.jml_byr","pembayaran,pasien,dokter","WHERE pembayaran.kode_psn = pasien.kode_psn AND pembayaran.kode_dkt = dokter.kode_dkt AND pembayaran.kode_byr = '$id'");
	$data = $qw->fetch();
?>
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="modal('','tutup')"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Pembayaran Pendaftaran</h4>
		</div>
		<div class="modal-body">
			<div class="form-group">
				<p>Tanggal Pembayaran</p>
				<input type="date" value="<?php echo $data[0]; ?>" class="form-control" name="">
			</div>
			<div class="form-group">
				<p>Nama Pasien</p>
				<input type="text" value="<?php echo $data[1]; ?>" class="form-control" name="">
			</div>
			<div class="form-group">
				<p>Nama Dokter</p>
				<input type="text" class="form-control" value="<?php echo $data[2]; ?>" name="">
			</div>
			<div class="form-group">
				<p>Sub Total</p>
				<input type="text" value="<?php echo $data[3] ?>" class="form-control" id="sub_total" name="">
			</div>
			<div class="form-group">
				<p>Bayar</p>
				<input type="text" class="form-control" onkeyup="bayar_pembayaran()" name="" id="bayar">
			</div>
			<div class="form-group">
				<p>Kembalian</p>
				<input type="text" class="form-control" id="kembalian" name="">
			</div>
			<button class="btn btn-primary" onclick="<?php echo $onclick; ?>">Bayar</button>
		</div>
	</div>
</div>