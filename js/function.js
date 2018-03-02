function panggil(c){
	$(".content").load(c);
}
function modal(url,method){
	if(method == "tampil"){
		$(".modal-isi").load(url);
		$(".modal-isi").fadeIn(100);
	}else{
		$(".modal-isi").fadeOut(100);
	}
}