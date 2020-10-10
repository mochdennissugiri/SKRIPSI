<?php 
	
	session_start();
	require_once'function/connection.php';


 ?>
<!DOCTYPE html>
<html>
<head>
	<title> bisoc futsal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Selamat Datang di lapang bisoc futsal</h1>
	</header>

	<nav>
		<a href="index.php">Home</a>
		<a href="login/login.php">login</a>
		<a href="login/register.php">Register</a>
		<a href="login/logout.php">logout</a>
		<a href="view/booking/booking.php">booking</a>
		<a href="view/booking/daftar_booking.php">daftar booking</a>
		<a href="view/jadwal/jadwal.php">jadwal</a>
		<a href="view/lapangan/lapangan.php">lapangan</a>
		<a href="view/pengguna/pengguna.php">pengguna</a>
		<a href="view/pengguna/daftar_pengguna.php">daftar_pengguna</a>
	</nav>

	<br><br><br>

	<ul>
		<h1>Selamat datang </h1>
	<from action="proses.php"method="post">
		<table>
			<tr>
				<td>salam olahraga</td>
				</tr>
		</table>
	</from> 
	</ul>

	</br></br></br>
	
	<footer>
		&copy; Bisoc Futsal
	</footer>
</body>
</html>