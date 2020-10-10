<?php  
	
	require_once 'function/connection.php';


	if(isset($_POST['submit'])){
	$level = "admin";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = 'Member';
	$sql = "INSERT INTO admin( username, password, level) VALUES( '$username', '$password', '$level') ";
    $query = mysqli_query($link, $sql);

    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> register </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form action="register.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Daftar
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="username" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>


					<div class="container-login100-form-btn">
						<button type="submit" name="submit" value="register" class="login100-form-btn">
							Daftar
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="login.php">
							Sudah punya akun ? login disini!
						</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
	<script src="js/main.js"></script>
<footer>
	<br>
 	&copy; Bisoc Futsal
	</footer>
</body>
</html>