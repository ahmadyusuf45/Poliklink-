<?php
	include "proses/p_login.php";
	if (isset($_SESSION['status'])) {
		echo "<script>document.location='index.php</script>";
	}else{
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<form action="" method="POST">
<div class="skin-login">
	<div class="title-login"><img src="img/logo.png"></div>
	<div class="content-login">
		<input type="text" id="username" placeholder="username" name="username">
		<input type="password" id="password" placeholder="password" name="password"><br>
		<input type="submit" value="Login" name="login">
	</div>
</div>
</form>
</body>
</html>