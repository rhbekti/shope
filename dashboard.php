<?php 
require_once ("koneksi.php");

if(!$_SESSION['login']){
	header("Location:index.php");
}

if(isset($_POST['logout'])){
	session_destroy();
	session_unset();

	header("Location:index.php");
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<style type="text/css">
		
		.kotak{
			align-items: center;
			width: 800px;
			height: 500px;
			margin: 5% 30%;
		}

	</style>
</head>
<body>
	<div class="kotak">
			<h1>Dashboard</h1>
			<br><br>

			<h5>Email</h5>
			<h3><?php echo $_SESSION['email']; ?></h3>
			<h5>Status</h5>
			<h3><?php echo $_SESSION['status']; ?></h3>

			<br><br>
			<form action="" method="post">
				<button type="submit" name="logout" onclick="return confirm('Apakah Yakin?');">Logout</button>
			</form>
	</div>
</body>
</html>