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
	<title>Login V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body background="bglogin.jpg" style="background-size: cover; ">
	<div style="width: 400px; margin: 0 auto; "><marquee><p style="color: white; font-size: 30px; font-weight: bold; font-family: 'Ranchers', cursive; letter-spacing: 5px; ">SILAHKAN REGISTER </p></marquee></div>
	<div class="limiter" style="margin-top: -60px; " >
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w "method="post" action="login/ceklogin.php">
					
				<span class="login100-form-title p-b-32">
						REGISTER
					</span>
					
			<?php 
			if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
			echo "<span> Login Gagal! Username dan Password Salah!</span>";
			}else if($_GET['pesan'] == "logout"){
			echo  "<span > Anda telah berhasil logout </span>";
			} else if($_GET['pesan'] == "belum_login"){
			echo "<span>Anda harus login terlebih dahulu</span>";
			}	
		}
		?>
	</form>
	<form class="login100-form validate-form flex-sb flex-w "method="post" action="">

					<span class="txt1 p-b-11 mt-2">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					<center>
						<p>Apakah anda  punya akun ? Login <a href="login.php" style="color:blue">disini</a></p>
					</center>
					
					

					<div class="container-login100-form-btn">
						<!-- <button class="login100-form-btn mt-2">
							Register
						</button> -->
						<input type="submit" name="submit" class="login100-form-btn mt-2" value="Register">
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>