<?php 
	require_once'../../function/connection.php';


	$id = $_GET['id'];

	$delete = mysqli_query ($link, "DELETE  FROM jadwal WHERE id ='$id'");
	if ($delete) {
		header("location: jadwal.php");
	
	}
		
	

	
 ?>