<?php
	include "konek/class.php";
	session_start();
	if (isset($_SESSION['status'])) {
		
	}else{
		echo "<script>document.location='login.php'</script>";
	}
	$qw = $proses->tampil("*","login","WHERE username = '$_SESSION[username]'");
	$data = $qw->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap_new/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="bootstrap_new/dist/css/bootstrap-theme.min.css">
</head>
<body>
<div class="menu_kiri">
<div class="judul">
	<img src="img/logo.png">
</div>
	<section>
		<?php		
		if($_SESSION['status']=$data['status']=="admin"){
					include "halaman/admin.php";
				}else if($_SESSION['status']=$data['status']=="apotek"){
					include "halaman/apotek.php";
				}else if($_SESSION['status']=$data['status']=="manajer"){
					include "halaman/manajer.php";
				}else{
					include "halaman/pendaftaran.php";
				}
	?>	
	</section>
</div>
<div class="kepala">
	<div class="menu_kepala">
		<a href="proses/p_logout.php">
	<?php		
	if($_SESSION['status']=$data['status']=="admin"){
					echo "Admin";
				}else if($_SESSION['status']=$data['status']=="apotek"){
					echo "Petugas Apotek";
				}else if($_SESSION['status']=$data['status']=="manajer"){
					echo "Manajer";
				}else{
					echo "Petugas Pendaftaran";
				}
	?>
		</a>
		<img src="img/user.svg">
	</div>
</div>
<div class="content">
	
</div>
<div class="modal-isi" hidden>
	
</div>
</body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap_new/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap_new/dist/js/bootstrap.js"></script>
<script type="text/javascript" src="js/proses.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".content").load('halaman/t_beranda.php');
	})
</script>
