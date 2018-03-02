<?php
	session_start();
	include "konek/class.php";
	if(isset($_POST['login'])){
		$qw = $proses->tampil("*","login","WHERE username='$_POST[username]'");
		$jml = $qw->rowCount();
		$data = $qw->fetch();
		$user = $_POST['username'];
		$pass = $_POST['password'];
		if($jml<>0){
			if($data['pass']==$pass){
				$_SESSION['status']=$data['status'];
				if($_SESSION['status']=$data['status']=="admin"){
					echo "<script>alert('berhasil masuk admin')</script>";
					echo "<script>document.location='index.php'</script>";
				}else if($_SESSION['status']=$data['status']=="apotek"){
					echo "<script>alert('berhasil masuk apotek')</script>";
					echo "<script>document.location='index.php'</script>";
				}else if($_SESSION['status']=$data['status']=="manajer"){
					echo "<script>alert('berhasil masuk manajer')</script>";
					echo "<script>document.location='index.php'</script>";
				}else{
					echo "<script>alert('berhasil masuk petugas pendaftaran')</script>";
					echo "<script>document.location='index.php'</script>";
				}
				$_SESSION['username']=$user;
			}else{
				echo "<script>alert('password salah')</script>";
			}	
		}
	}
?>