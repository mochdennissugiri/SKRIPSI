<?php

require_once'../../function/connection.php';

$id = $_GET['id'];
$sqlBooking = "SELECT * FROM booking WHERE id = '$id'";
$queryBooking = mysqli_query($link, $sqlBooking);
$row = mysqli_fetch_assoc($queryBooking);

$t_nama_team = $row['nama_team'];
$t_tanggal_booking = $row['tanggal_booking'];
$t_tempat_lapang = $row['tempat_lapang'];
$t_mulai_jam = $row['mulai_jam'];
$t_akhir_jam = $row['akhir_jam'];


if (isset($_POST['simpan'])){

	$nama_team = $_POST['nama_team'];
	$tanggal_booking = $_POST['tanggal_booking'];
	$tempat_lapang = $_POST['tempat_lapang'];
	$mulai_jam = $_POST['mulai_jam'];
	$akhir_jam = $_POST['akhir_jam'];
	$total_bayar = $_POST['total_bayar'];
	$status_bayar =$_POST['status_bayar'];


	$sql = "INSERT INTO jadwal(nama_team,tanggal_booking,tempat_lapang,mulai_jam,akhir_jam,total_bayar,status_bayar) VALUES('$nama_team','$tanggal_booking','$tempat_lapang','$mulai_jam','$akhir_jam','$total_bayar', '$status_bayar')";

	$query = mysqli_query($link,$sql);

	header("location: ../jadwal/jadwal.php");
}


require_once '../../header.php';
?>
<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8">
  <title>BOOKING BISOC FUTSAL</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../../img/favicon.png" rel="icon">
  <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../lib/icomoon/icomoon.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../../css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Shield
    Template URL: https://templatemag.com/shield-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
<div id="navbar-main">
		    <!-- Fixed navbar -->
		    <div class="navbar navbar-inverse navbar-fixed-top">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
		          </button>
		          <a class="navbar-brand hidden-xs hidden-sm smoothscroll" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
		        </div>
		        <div class="navbar-collapse collapse">
		          <ul class="nav navbar-nav">
		            <li><a href="../../index.php" >Beranda</a></li>
			
			            <li class="active"> <a href="../booking/booking.php">Booking</a></li>
                </ul>
              </div>
		        </div>
		        <!--/.nav-collapse -->
		      </div>
        </div>

<form action="" method="POST">

<table class="table table-sm" border="3"  align="center" bgcolor="#2b7cff">

	<div class="container" id="about" name="about">
			<div class="row white">
			   	<br>
			    <h1 class="centered">BOOKING</h1>
			    <hr>

			    <div class="col-lg-5">
       
        <center><h3>Contact Form</h3></center>
        <h2>Silahkan Di Isi</h2>
        <form cclass="contact-form php-mail-form" action="" method="POST">

            <div class="form-group">
              <input type="text" name="nama_team" class="form-control" placeholder="nama team" value="<?php echo $row['nama_team']; ?>">
            </div>
            <div class="form-group">
              <input type="text" name="tanggal_booking" class="form-control" id="contact-email" placeholder="tanggal booking" value="<?php echo $row['tanggal_booking']; ?>">
            </div>
            <div class="form-group">
              <input type="text" name="tempat_lapang" class="form-control" id="contact-subject" placeholder="tempat lapang" value="<?php echo $row['tempat_lapang']; ?>">
            </div>

             <div class="form-group">
              <input type="text" name="mulai_jam" class="form-control" id="contact-subject" placeholder="mulai jam" value="<?php echo $row['mulai_jam']; ?>">
            </div>

             <div class="form-group">
              <input type="text" name="akhir_jam" class="form-control" placeholder="akhir jam" value="<?php echo $row['akhir_jam']; ?>">
              <div class="validate" ></div>
            </div>

           
           	<div class="form-group">
			<input type="text" name="total_bayar" class="form-control" placeholder="total bayar" >
			<div class="validate"></div>
			</div>

		 	<div class="form-group">
		<input name="status_bayar" type="radio" size="50" maxlength="50" value="lunas" >  Lunas
		<input type="radio" name="status_bayar" value="dp">   DP
		<div class="validate"></div>
		</div>		


            <div class="form-send">
              <input  type="submit" name="simpan" value="Simpan" class="btn btn-large btn-primary">
            </div>

          </form>
      </div>
</div>
</table>
</form>

<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../../lib/php-mail-form/validate.js"></script>
<script src="../../lib/easing/easing.min.js"></script>

<!-- Template Main Javascript File -->
<script src="../../js/main.js"></script>
</body>
</html>
