<?php 
require_once('koneksi.php');

// skrip untuk login
if(isset($_POST['submit'])){

	// untuk menangkap nilai dari form

	$email = $_POST['username'];
	$password = $_POST['password'];


	// cek akun di database
	$query = "SELECT * FROM tbl_akun WHERE username='$email' and password='$password'";

	$valid = mysqli_query($koneksi,$query);

	$data = mysqli_fetch_assoc($valid);

	if(mysqli_num_rows($valid) > 0){
		if($email == $data['username'] and $password == $data['password']){

			$_SESSION['login'] = true;
			$_SESSION['email'] = $email;
			$_SESSION['status'] = $data['status'];

			header("Location:dashboard.php");

		}else{
			echo "<script>alert('Password atau Email Salah');</script>";
		}
	}else{
			echo "<script>alert('Email Belum Terdaftar');</script>";
	}
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Shope Shop</title>
	
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
	<!-- membuat menu atas -->
	<div class="kotak">
		<h1>Shope Shop</h1>
		<br><br>

		<div class="form-login">
			<h3>Login</h3>
			<!-- form untuk login -->
			<form action="" method="post">
				<label>Username</label>
				<br>
				<input type="email" name="username" required>
				<br>
				<label>Password</label>
				<br>
				<input type="password" name="password" required>
				<br><br>
				<button type="submit" name="submit">Login</button>
			</form>

		</div>

	</div>


</body>
</html>