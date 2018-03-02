<?php
	include "../konek/class.php";
	include "../konek/no_pasien.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$judul = "Edit";
		$value = "Edit";
		$onclick = "edit_pasien('$id')";
	}else{
		$id = "";
		$judul = "Input";
		$value = "Simpan";
		$onclick = "simpan_pasien()";
	}
	$qw = $proses->tampil("*","pasien","WHERE kode_psn = '$id'");
	$data = $qw->fetch();
	if(empty($data[0])){
		$kode_psn  = "$newid";
	}else{
		$kode_psn = "$data[0]";
	}
?>
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="modal('','tutup')"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title"><?php echo $judul; ?> Data Pasien</h4>
		</div>
		<div class="modal-body">
			<div class="form-group">
				<p>Id Pasien</p>
				<input type="text" value="<?php echo $kode_psn; ?>" name="" id="kode_psn" class="form-control">
			</div>
			<div class="form-group">
				<p>Nama Pasien</p>
				<input type="text" name="" value="<?php echo $data[1]; ?>" id="nama_psn" class="form-control">
			</div>
			<div class="form-group">
				<p>Alamat Pasien</p>
				<input type="text" value="<?php echo $data[2]; ?>" name="" id="alamat_psn" class="form-control">
			</div>
			<div class="form-group">
				<p>Jenis Kelamin</p>
				<select id="gender_psn" class="form-control">
					<option>Pilih</option>
					<option <?php if($data[3] == "Laki-Laki"){ echo "selected"; } ?>>Laki-Laki</option>
					<option <?php if($data[3] == "Permpuan"){ echo "selected"; } ?>>Permpuan</option>
				</select>
			</div>
			<div class="form-group">
				<p>Umur Pasien</p>
				<input type="text" value="<?php echo $data[4]; ?>" name="" id="umur_psn" class="form-control">
			</div>
			<div class="form-group">
				<p>Nomor Telepon</p>
				<input type="text" name="" value="<?php echo $data[5]; ?>" id="tlp_psn" class="form-control">
			</div>
			<button class="btn btn-primary" onclick="<?php echo $onclick; ?>"><?php echo $value; ?></button>
		</div>
	</div>
</div>