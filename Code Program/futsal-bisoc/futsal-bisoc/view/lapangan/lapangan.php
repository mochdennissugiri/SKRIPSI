<?php

require_once'../../function/connection.php';

if (isset($_POST[''])){
	header("Location: ../index.php");
	$no = $_POST['no'];
	$nama_lapangan = $_POST['nama_lapangan'];



	$sql = "INSERT INTO lapangan(no,nama_lapangan) VALUES('$no','$nama_lapangan')";

$query = mysqli_query($link,$sql);{
	
	header("Location:index.php");

	}
}

?>

<!DOCTYPE html >
<html>
<head>
	<title> lapangan </title>
</head>
<body>
	<header>
		<tr>
			<center><td>foto lapangan bisoc futsal</td></center>
		</tr>
	</header>
<form action="" method="POST">
<table border="" align="center" bgcolor="#2b7cff">
	<thead>
		<tr>
			<td>
				<center><span>1.interlok</span></center>
				<img src="interlok.jpg" alt="" height="200" widh="100">
			</td>
			<td>
				<center><span>2.sintetis</span></center>
				<img src="sintetis.jpg" alt="" height="200" widh="100"></td>
		</tr>
</thead>
		<tr>
		<td colspan="3" align="center">
		</td>
		</tr>
</table>
</form>
<footer>
 	&copy; Bisoc Futsal
	</footer>
</body>
</html>