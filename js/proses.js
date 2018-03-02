function simpan_pasien(){
	kode_psn = $("#kode_psn").val();
	nama_psn = $("#nama_psn").val();
	alamat_psn = $("#alamat_psn").val();
	gender_psn = $("#gender_psn").val();
	umur_psn = $("#umur_psn").val();
	tlp_psn = $("#tlp_psn").val();
	$.ajax({
		url:"proses/s_pasien.php",
		type:"POST",
		data:{
			kode_psn:kode_psn,
			nama_psn:nama_psn,
			alamat_psn:alamat_psn,
			gender_psn:gender_psn,
			umur_psn:umur_psn,
			tlp_psn:tlp_psn
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				modal('','tutup');
				$(".content").load('halaman/t_pasien.php');
				alert("berhasil");
			}
		}
	})
}
function t_edit_pasien(id){
	url = "modal/pasien.php?id="+id;
	modal(url,'tampil');
}
function edit_pasien(id){
	nama_psn = $("#nama_psn").val();
	alamat_psn = $("#alamat_psn").val();
	gender_psn = $("#gender_psn").val();
	umur_psn = $("#umur_psn").val();
	tlp_psn = $("#tlp_psn").val();
	$.ajax({
		url:"proses/e_pasien.php",
		type:"POST",
		data:{
			kode_psn:id,
			nama_psn:nama_psn,
			alamat_psn:alamat_psn,
			gender_psn:gender_psn,
			umur_psn:umur_psn,
			tlp_psn:tlp_psn
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				alert("berhasil");
				modal('','tutup');
				$(".content").load('halaman/t_pasien.php');
			}
		}
	})
}
function hapus_pasien(id){
	$.ajax({
		url:"proses/h_pasien.php",
		type:"GET",
		data:{
			kode_psn:id
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				alert("berhasil");
				$(".content").load('halaman/t_pasien.php');
			}
		}
	})
}
function simpan_dokter(){
	kode_dkt = $("#kode_dkt").val();
	nama_dkt = $("#nama_dkt").val();
	spesialis_dkt = $("#spesialis_dkt").val();
	alamat_dkt = $("#alamat_dkt").val();
	tlp_dkt = $("#tlp_dkt").val();
	kode_plk = $("#kode_plk").val();
	tarif = $("#tarif").val();
	$.ajax({
		url:"proses/s_dokter.php",
		type:"POST",
		data:{
			kode_dkt:kode_dkt,
			nama_dkt:nama_dkt,
			spesialis_dkt:spesialis_dkt,
			alamat_dkt:alamat_dkt,
			tlp_dkt:tlp_dkt,
			kode_plk:kode_plk,
			tarif:tarif
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				alert("berhasil");
				modal('','tutup');
				$(".content").load('halaman/t_dokter.php');
			}
		}
	})
}
function t_edit_dokter(id){
	url = "modal/dokter.php?id="+id;
	modal(url,'tampil');
}
function edit_dokter(id){
	nama_dkt = $("#nama_dkt").val();
	spesialis_dkt = $("#spesialis_dkt").val();
	alamat_dkt = $("#alamat_dkt").val();
	tlp_dkt = $("#tlp_dkt").val();
	kode_plk = $("#kode_plk").val();
	tarif = $("#tarif").val();
	$.ajax({
		url:"proses/e_dokter.php",
		type:"POST",
		data:{
			kode_dkt:id,
			nama_dkt:nama_dkt,
			spesialis_dkt:spesialis_dkt,
			alamat_dkt:alamat_dkt,
			tlp_dkt:tlp_dkt,
			kode_plk:kode_plk,
			tarif:tarif
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				alert("berhasil");
				modal('','tutup');
				$(".content").load('halaman/t_dokter.php');
			}
		}
	})
}
function hapus_dokter(id){
	$.ajax({
		url:"proses/h_dokter.php",
		type:"GET",
		data:{
			kode_dkt:id
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				alert("berhasil");
				$(".content").load('halaman/t_dokter.php');
			}
		}
	})
}
function simpan_obat(){
	kode_obt = $("#kode_obt").val();
	nama_obt = $("#nama_obt").val();
	jenis_obt = $("#jenis_obt").val();
	kategori_obt = $("#kategori_obt").val();
	harga_obt = $("#harga_obt").val();
	jml_obt = $("#jml_obt").val();
	$.ajax({
		url:"proses/s_obat.php",
		type:"POST",
		data:{
			kode_obt:kode_obt,
			nama_obt:nama_obt,
			jenis_obt:jenis_obt,
			kategori_obt:kategori_obt,
			harga_obt:harga_obt,
			jml_obt:jml_obt
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				alert("barhasil");
				modal('','tutup');
				$(".content").load('halaman/t_obat.php');
			}
		}
	})
}
function t_edit_obat(id){
	url = "modal/obat.php?id="+id;
	modal(url,'tampil');
}
function edit_obat(id){
	nama_obt = $("#nama_obt").val();
	jenis_obt = $("#jenis_obt").val();
	kategori_obt = $("#kategori_obt").val();
	harga_obt = $("#harga_obt").val();
	jml_obt = $("#jml_obt").val();
	$.ajax({
		url:"proses/e_obat.php",
		type:"POST",
		data:{
			kode_obt:id,
			nama_obt:nama_obt,
			jenis_obt:jenis_obt,
			kategori_obt:kategori_obt,
			harga_obt:harga_obt,
			jml_obt:jml_obt
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				alert("berhasil");
				modal('','tutup');
				$(".content").load('halaman/t_obat.php');
			}
		}
	})
}
function hapus_obat(id){
	$.ajax({
		url:"proses/h_obat.php",
		type:"GET",
		data:{
			kode_obt:id	
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				$(".content").load('halaman/t_obat.php');
			}
		}
	})
}
function cari_dkt(){
	kode_dkt = $("#kode_dkt").val();
	$.ajax({
		url:"proses/oto_dokter.php",
		type:"POST",
		dataType:"json",
		data:{
			kode_dkt:kode_dkt
		},
		success:function(hasil){
			$("#tarif").val(hasil.tarif);
			$("#nama_plk").val(hasil.nama_plk);
			$("#kode_plk").val(hasil.kode_plk);
		}
	})
}
function cari_psn(){
	kode_psn = $("#kode_psn").val();
	$.ajax({
		url:"proses/oto_pasien.php",
		type:"POST",
		dataType:"json",
		data:{
			kode_psn:kode_psn
		},
		success:function(hasil){
			$("#nama_psn").val(hasil.nama_psn);
		}
	})
}
function simpan_pendaftaran(){
	kode_pendaf= $("#kode_pendaf").val();
	tgl_pendaf = $("#tgl_pendaf").val();
	tarif = $("#tarif").val();
	kode_plk = $("#kode_plk").val();
	kode_psn = $("#kode_psn").val();
	kode_dkt = $("#kode_dkt").val();
	biaya = $("#biaya").val();
	status_pasien = $("#status_pasien").val();
	keterangan = $("#keterangan").val();
	$.ajax({
		url:"proses/s_pendaftaran.php",
		type:"POST",
		data:{
			kode_pendaf:kode_pendaf,
			tgl_pendaf:tgl_pendaf,
			kode_dkt:kode_dkt,
			kode_psn:kode_psn,
			kode_plk:kode_plk,
			biaya:biaya,
			status_pasien:status_pasien,
			keterangan:keterangan,
			tarif:tarif
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				alert("berhasil");
				modal('','tutup');
				$(".content").load('halaman/t_pendaftaran.php');
			}
		}
	})
}
function hapus_pendaftaran(id){
	$.ajax({
		url:"proses/h_pendaftaran.php",
		type:"GET",
		data:{
			kode_pendaf:id
		},
		success:function(hasil){
			if(hasil == "berhasil"){
			alert("berhasil");
			$(".content").load('halaman/t_pendaftaran.php');
			}

		}
	})
}
function t_pembayaran(id){
	url = "modal/pembayaran.php?id="+id;
	modal(url,'tampil');
}
function bayar_pembayaran(){
	var x = $("#sub_total").val();
	var y  = $("#bayar").val();
	var u = parseInt(x)-parseInt(y);
	$("#kembalian").val(u);
}
function hapus_pembayaran(id){
	$.ajax({
		url:"proses/h_pembayaran.php",
		type:"GET",
		data:{
			kode_byr:id
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				alert("berhasil");
				$(".content").load('halaman/t_pembayaran.php');
			}
		}
	})
}
function bayar(id){
	jml_byr = $("#kembalian").val();
	$.ajax({
		url:"proses/e_pembayaran.php",
		type:"POST",
		data:{
			kode_byr:id,
			jml_byr:jml_byr
		},
		success:function(hasil){
			if(hasil == "berhasil"){
			alert("Terima Kasih Telah Melakuakan Pembayaran Pendaftaran");			
			$(".content").load('halaman/t_pembayaran.php');
			modal('','tuutp');	
			}
			
		}
	})
}
function cetak_pasien(id){
 var x  = id;
 window.open("item/cetak_pasien.php?kode_psn="+x,"_blank");
}
function cari_obt(){
	kode_obt = $("#kode_obt").val();
	$.ajax({
		url:"proses/oto_obat.php",
		type:"POST",
		dataType:"json",
		data:{
			kode_obt:kode_obt
		},
		success:function(hasil){
			$("#nama_obt").val(hasil.nama_obt);
			$("#harga_obt").val(hasil.harga_obt);
		}
	})
}

function simpan_detail_resep(){
	kode_rsp = $("#kode_rsp").val();
	kode_obt = $("#kode_obt").val();
	harga = $("#harga_obt").val();
	jml_beli = $("#jml_beli").val();
	dosis = $("#dosis").val();
	total = $("#total").val();
	$.ajax({
		url:"proses/s_detail_resep.php",
		type:"POST",
		data:{
			kode_rsp:kode_rsp,
			kode_obt:kode_obt,
			harga:harga,
			jml_beli:jml_beli,
			dosis:dosis,
			total:total
		},
		success:function(hasil){
			if(hasil == "berhasil"){
					$(".table-responsive").load('item/tb_detail_resep.php');
			}
		}
	})
}
function jml_obt(){
	var x = $("#harga_obt").val();
	var y = $("#jml_beli").val();
	var u = parseInt(x)*parseInt(y);
	$("#total").val(u);
}
function bayar_resep(){
	var a = document.getElementById('sub_total').value = document.getElementById('sub_total').value;
	var b = document.getElementById('bayar').value;
	var c = parseInt(a)-parseInt(b);
	if (!isNaN(c)){
		document.getElementById('kembali').value=c;
	}
}
function simpan_resep(){
	kode_rsp = $("#kode_rsp").val();
	tgl_rsp = $("#tgl_rsp").val();
	kode_psn = $("#kode_psn").val();
	total_harga = $("#sub_total").val();
	bayar = $("#bayar").val();
	kembali = $("#kembali").val();
	$.ajax({
		url:"proses/s_resep.php",
		type:"POST",
		data:{
			kode_rsp:kode_rsp,
			tgl_rsp:tgl_rsp,
			kode_psn:kode_psn,
			total_harga:total_harga,
			bayar:bayar,
			kembali:kembali
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				alert("barhasil");
				$(".content").load('halaman/t_resep.php');
			} 
		}
	})
}
function hapus_detail_resep(id){
	$.ajax({
		url:"proses/h_detail_resep.php",
		type:"GET",
		data:{
			kode_detail:id
		},
		success:function(hasil){
			$(".table-responsive").load('item/tb_detail_resep.php');
		}
	})
}
function hapus_resep(id){
	$.ajax({
		url:"proses/h_resep.php",
		type:"GET",
		data:{
			kode_rsp:id
		},
		success:function(hasil){
			if(hasil == "berhasil"){
				alert("barhasil");
				$(".content").load('halaman/t_resep.php');
			}
		}
	})
}
function cari_kode_byr(){
	kode_byr = $("#kode_byr").val();
	$(".content").load('halaman/t_pembayaran.php?kode_byr='+kode_byr);
}
function cetak_lap_pembayaran_pendaftaran(){
	tgl_mulai = $("#tgl_mulai").val();
	tgl_akhir = $("#tgl_akhir").val();
	window.open("item/tb_pembayaran_pendaftaran.php?tgl_mulai="+tgl_mulai+"&tgl_akhir="+tgl_akhir,'_blank');
}
function cetak_lap_pendaftaran(){
	tgl_mulai = $("#tgl_mulai").val();
	tgl_akhir = $("#tgl_akhir").val();
	window.open("item/tb_pendaftaran.php?tgl_mulai="+tgl_mulai+"&tgl_akhir="+tgl_akhir,'_blank');
}
function cetak_lap_resep(){
	tgl_mulai = $("#tgl_mulai").val();
	tgl_akhir = $("#tgl_akhir").val();
	window.open("item/tb_resep.php?tgl_mulai="+tgl_mulai+"&tgl_akhir="+tgl_akhir,'_blank');
}