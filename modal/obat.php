<?php
	include "../konek/class.php";
	include '../konek/no_obat.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$judul = "Edit";
		$value = "Edit";
		$onclick = "edit_obat('$id')";
	}else{
		$id = "";
		$judul = "Input";
		$value = "Simpan";
		$onclick = "simpan_obat()";
	}
	$qw = $proses->tampil("*","obat","WHERE kode_obt = '$id'");
	$data = $qw->fetch();
	if(empty($data[0])){
		$kode_obt = "$newid";
	}else{
		$kode_obt = "$data[0]";
	}
?>
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="modal('','tutup')"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title"><?php echo $judul; ?> Data Obat</h4>
		</div>
		<div class="modal-body">
			<div class="form-group">
				<p>Id Obat</p>
				<input type="text" class="form-control" id="kode_obt" name="" value="<?php echo $kode_obt; ?>">
			</div>
			<div class="form-group">
				<p>Nama Obat</p>
				<input type="text" class="form-control" id="nama_obt" value="<?php echo $data[1]; ?>" name="">
			</div>
			<div class="form-inline">
				<div class="form-group">
					<p>Jenis Obat</p>
					<select class="form-control" id="jenis_obt">
						<option>Pilih Jenis</option>
						<option <?php if($data[2] == "Cair"){echo "selected";} ?>>Cair</option>
						<option <?php if($data[2] == "Tablet"){echo "selected";} ?>>Tablet</option>
						<option <?php if($data[2] == "Bubuk"){echo "selected";} ?>>Bubuk</option>
					</select>
				</div>
				<div class="form-group">
					<p>Kategori Obat</p>
					<select class="form-control" id="kategori_obt">
						<option>Pilih Kategori</option>
						<option <?php if($data[3] =="A"){ echo "selected"; } ?>>A</option>
						<option <?php if($data[3] =="B"){ echo "selected"; } ?>>B</option>
						<option <?php if($data[3] =="C"){ echo "selected"; } ?>>C</option>
						<option <?php if($data[3] == "D"){ echo "selected"; } ?>>D</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<p>Harga Obat</p>
				<input type="text" class="form-control" id="harga_obt" value="<?php echo $data[4]; ?>" name="">
			</div>
			<div class="form-group">
				<p>Jumlah Obat</p>
				<input type="text" class="form-control" id="jml_obt" value="<?php echo $data[5]; ?>" name="">
			</div>
			<button class="btn btn-primary" onclick="<?php echo $onclick; ?>"><?php echo $value; ?></button>
		</div>
	</div>
</div>