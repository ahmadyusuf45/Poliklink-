<?php
	include "../konek/class.php";
	include "../konek/no_pendaftaran.php";
?>
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="modal('','tutup')"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Input Pendaftaran</h4>
		</div>
		<div class="modal-body">
			<div class="form-inline">
			<div class="form-group">
				<p>Nomor Pendaftaran</p>
				<input type="text" class="form-control" value="<?php echo $newid; ?>" id="kode_pendaf" name="">
			</div>
			<div class="form-group">
				<p>Tanggal Pendaftaran</p>
				<input type="date" class="form-control" id="tgl_pendaf" name="">
			</div>
			</div>		
			<div class="form-inline">
			<div class="form-group">
				<p>Nama Dokter</p>
				<select class="form-control" id="kode_dkt" onchange="cari_dkt()">
					<option>Pilih Dokter</option>
					<?php
					$tmp = $proses->tampil("kode_dkt,nama_dkt","dokter","ORDER BY kode_dkt ASC");
					foreach ($tmp as $item_dkt) {
						if($item_dkt[0] == ""){
							$selectedes = "selected";
						}else{
							$selectedes = "";
						}
					?>
					<option <?php echo $selectedes; ?> value="<?php echo $item_dkt[0];?>"><?php echo $item_dkt[1]; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">	
				<p>Tarif Dokter</p>
				<input type="text" id="tarif" class="form-control" name="">
			</div>
			<div class="form-group">
				<p>Jenis Poliklinik</p>
				<input type="text" class="form-control" id="nama_plk" name="">
				<input type="text" hidden id="kode_plk" name="">
			</div> 
			</div>
			<div class="form-inline">
				<div class="form-group">
					<p>Kode Pasien</p>
					<input type="text" onkeyup="cari_psn()" class="form-control" id="kode_psn" name="">
				</div>
				<div class="form-group">
					<p>Nama Pasien</p>
					<input type="text" id="nama_psn" class="form-control	" name="">
				</div>
			</div>
			<div class="form-group">
				<p>Biaya</p>
				<input type="text" id="biaya" name="" class="form-control">
			</div>
			<div class="form-group">
				<p>Status Pasien</p>
				<input type="text" id="status_pasien" value="aktif" class="form-control" readonly name="">
			</div>
			<div class="form-group">
				<p>Keterangan Penyakit</p>
				<textarea class="form-control" name="" id="keterangan"></textarea>
			</div>
			<button class="btn btn-primary" onclick="simpan_pendaftaran()">Simpan</button>
		</div>
	</div>
</div>