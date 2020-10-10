<?php 
	
	require_once'../../function/connection.php';

	$id = $_GET['id'];

	$delete = mysqli_query($link, "DELETE * FROM pengguna WHERE id='$id'");
	$delete = mysqli_query($link, "DELETE FROM pengguna WHERE id='$id'");
	if ($delete){
			header("location: daftar_pengguna.php");
	}
		

	
 ?>