<?php

require_once'../../function/connection.php';

$id = $_GET['id'];
$sqlpengguna = "SELECT * FROM pengguna WHERE id = '$id'";
$querypengguna = mysqli_query($link, $sqlpengguna);
$row = mysqli_fetch_assoc($querypengguna);

$t_nama_team = $row['nama_team'];
$t_tempat_lapang = $row['tempat_lapang'];
$t_mulai_jam = $row['mulai_jam'];
$t_akhir_jam = $row['akhir_jam'];


if (isset($_POST['simpan'])){

	$nama_team = $_POST['nama_team'];
	$tempat_lapang = $_POST['tempat_lapang'];
	$mulai_jam = $_POST['mulai_jam'];
	$akhir_jam = $_POST['akhir_jam'];



	$sql = "INSERT INTO pengguna(nama_team,tempat_lapang,mulai_jam,akhir_jam,) VALUES('$nama_team','$tempat_lapang','$mulai_jam','$akhir_jam')";

	$query = mysqli_query($link,$sql);

	header("location: ../pengguna/daftar_pengguna.php");
}

?>

<!DOCTYPE html >
<html>
<head>
	<title> PENGGUNA</title></head>
<body>
<form action="" method="POST">

<table border="1" align="center" bgcolor="#2b7cff">

	<tr>
		<td colspan="3">
			<h2 align="center"> PENGGUNA </h2>
		</td>
	</tr>
	<tr>
		<td>nama team</td>
		<td>
			<input name="nama_team" type="text" size="50" maxlength="50" value="<?php echo $t_nama_team; ?>">
		</td>
	</tr>
	
	<tr>
		<td>tempat lapang</td>
		<td>
			<input type="text" name="tempat_lapang" value="<?php echo $t_tempat_lapang; ?>">
		</td>
	</tr>
	<tr>
	<td>mulai jam</td>
		<td>
			<input name="mulai_jam" type="text" size="24" maxlength="24" value="<?php echo $t_mulai_jam; ?>" placeholder="JJ:MM:DD">
		</td>
	</tr>
	<tr>
	<td>akhir jam</td>
		<td>
			<input name="akhir_jam" type="text" size="24" maxlength="24" value="<?php echo $t_akhir_jam; ?>" placeholder="JJ:MM:DD">
		</td>
	</tr>
	
	<tr>
	<td colspan="3" align="center">
	<input  type="submit" name="simpan" value="Simpan">
	</td>
	</tr>
</table>
</form>
<footer>
 	&copy; Bisoc Futsal
	</footer>
</body>
</html>