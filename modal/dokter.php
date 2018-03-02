<?php
	include "../konek/class.php";
	include "../konek/no_dokter.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$judul = "Edit";
		$value = "Edit";
		$onclick = "edit_dokter('$id')";
	}else{
		$id = "";
		$judul = "Input";
		$value = "Simpan";
		$onclick = "simpan_dokter()";
	}
	$qw = $proses->tampil("*","dokter","WHERE kode_dkt = '$id'");
	$data = $qw->fetch();
	if(empty($data[0])){
		$kode_dkt = "$newid";
	}else{
		$kode_dkt = "$data[0]";
	}
?>
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="modal('','tutup')"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title"><?php echo $judul ?> Data Dokter</h4>
		</div>
		<div class="modal-body">
			<div class="form-group">
				<p>Id Dokter</p>
				<input type="text" id="kode_dkt" value="<?php echo $kode_dkt; ?>" class="form-control"  name="">
			</div>
			<div class="form-group">
				<p>Nama Dokter</p>
				<input type="text" id="nama_dkt" name="" value="<?php echo $data[1]; ?>" class="form-control">
			</div>
			<div class="form-group">
				<p>Spesialis</p>
				<input type="text" id="spesialis_dkt" value="<?php echo $data[2]; ?>" class="form-control" name="">
			</div>
			<div class="form-group">
				<p>Alamat</p>
				<input type="text" id="alamat_dkt" value="<?php echo $data[3]; ?>" class="form-control" name="">
			</div>
			<div class="form-group">
				<p>Nomor Telepon</p>
				<input type="text" id="tlp_dkt" value="<?php echo $data[4]; ?>" class="form-control" name="">
			</div>
			<div class="form-group">
				<p>Jenis Poliklinik</p>
				<select id="kode_plk" class="form-control">
				<option>Pilih</option>
				<?php
				$tmp = $proses->tampil("kode_plk,nama_plk","poliklinik","ORDER BY kode_plk ASC");
				foreach ($tmp as $item_poli) {
					if($item_poli[0] == $data[5]){
						$selectedes = "selected";
					}else{
						$selectedes = "";
					}
				?>
				<option <?php echo $selectedes; ?> value="<?php echo $item_poli[0]; ?>"><?php echo $item_poli[1]; ?></option>
				<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<p>Tarif</p>
				<input type="text" id="tarif" value="<?php echo $data[6]; ?>" class="form-control" name="">
			</div>
			<button class="btn btn-primary" onclick="<?php echo $onclick ?>"><?php echo $value; ?></button>
		</div>
	</div>
</div>