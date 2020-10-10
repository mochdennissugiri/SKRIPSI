<?php

require_once'../../function/connection.php';

if (isset($_POST['simpan'])){
	header("Location: ../index.php");
	$nama_team = $_POST['nama_team'];
	$tanggal_booking = $_POST['tanggal_booking'];
	$tempat_lapang = $_POST['tempat_lapang'];
	$mulai_jam = $_POST['mulai_jam'];
	$akhir_jam = $_POST['akhir_jam'];
	$total_bayar = $_POST['total_bayar'];
	$status_bayar = $_POST['status_bayar'];


	$sql = "INSERT INTO booking(nama_team,tanggal_booking,tempat_lapang,mulai_jam,akhir_jam,total_bayar,status_bayar) VALUES('$nama_team','$tanggal_booking','$tempat_lapang','$mulai_jam','$akhir_jam','$total_bayar', '$status_bayar')";

	$query = mysqli_query($link,$sql);{

		header("Location: ../../index.php");
	}
}

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

	<!-- Menu Atas -->

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
      <!-- Akhir Menu Atas -->

  <!-- Tampilan Table -->
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
              <input type="text" name="nama_team" class="form-control" placeholder="nama team">
            </div>
            <div class="form-group">
              <input type="text" name="tanggal_booking" class="form-control" id="contact-email" placeholder="tanggal booking">
            </div>
            <div class="form-group">
              <input type="text" name="tempat_lapang" class="form-control" id="contact-subject" placeholder="tempat lapang">
            </div>

             <div class="form-group">
              <input type="text" name="mulai_jam" class="form-control" id="contact-subject" placeholder="mulai jam">
            </div>

             <div class="form-group">
              <input type="text" name="akhir_jam" class="form-control" placeholder="akhir jam">
              <div class="validate"></div>
            </div>


            <div class="form-send">
              <input  type="submit" name="simpan" value="Simpan" class="btn btn-large btn-primary">
            </div>

          </form>
      </div>
</div>

<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../../lib/php-mail-form/validate.js"></script>
<script src="../../lib/easing/easing.min.js"></script>

<!-- Template Main Javascript File -->
<script src="../../js/main.js"></script>
</body>
</html>