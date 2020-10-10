<?php 

function register_user($username, $password, $nama, $email){
		global $link;

		$query 	= "INSERT INTO admin (username,password,nama,email) VALUES ('$username','$password','$nama','$email')";

		if(mysqli_query($link, $query))	{
			return true;
		}else{
		return false;
		}
	}


 ?>