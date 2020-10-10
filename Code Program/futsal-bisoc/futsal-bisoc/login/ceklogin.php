<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
require_once '../function/connection.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($link,"SELECT * FROM admin WHERE username='$username' AND password='$password'");


$sql_session = "SELECT * FROM admin WHERE username='$username'";
$query_session = mysqli_query($link, $sql_session);
$qrysession = mysqli_fetch_assoc($query_session);

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = $qrysession['level'];
	$_SESSION['status'] = "login";
	header("location:../index.php");
}else{
	header("location:../login.php?pesan=gagal");
}
?>

