<?php 

require_once'../../function/connection.php';	


?>

<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8">
  <title>JADWAL BISOC FUTSAL</title>
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
			            <li> <a href="../booking/booking.php">Booking</a></li>
		        </div>
		        <!--/.nav-collapse -->
		      </div>
		    </div>
		  </div>

		  <!-- Akhir Menu Atas -->


		<!-- Tampilan Table -->
		<div class="container" id="about" name="about">
			<div class="row white">
			   	<br>
			    <h1 class="centered">JADWAL LAPANGAN</h1>
			    <hr>

			    <!-- Isi Table -->
			    <div class="col-lg-12">
			        <form action="" method="POST">
				<?php 

						$queryJadwal = mysqli_query($link, "SELECT * FROM jadwal");
						if (mysqli_num_rows($queryJadwal) == 0) {
							echo "Gagal menampilkan data";
						}else{

					 ?>
				<table class="table table-sm" border="3">

					<thead>
					<tr>
						<th>No.</th>
						<th>Nama Team</th>
						<th>Tanggal Booking</th>
						<th>Waktu Mulai</th>
						<th>Waktu Akhir</th>
						<th>Lapang</th>
						<th>Total Bayar</th>
						<th>Status</th>
						<th>action</th>
					</tr>
					</thead>
					<?php  
						$no = 1;
						while ($row = mysqli_fetch_assoc($queryJadwal)) {
					?>
					
					<tbody>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $row['nama_team']; ?></td>
							<td><?php echo $row['tanggal_booking']; ?></td>
							<td><?php echo $row['mulai_jam'] ;?></td>
							<td><?php echo $row['akhir_jam']; ?></td>
							<td><?php echo $row['tempat_lapang']; ?></td>
							<td><?php echo $row['total_bayar'] ?></td>
							<td><?php echo $row['status_bayar']?></td>
							<td>
								<button type="submit" class="btn btn-large"><a href="hapus_jadwal.php?id=<?= $row['id'];  ?>" type="button">HAPUS</a></button>
							</td>
						</tr>
					</tbody>
					<?php $no++; } ?>
				</table>
				<?php } ?>
			</form>
	      </div>
      	<!-- Akhir isi table -->
    	
    	</div>
    	<!-- row -->
  		</div>
  		<!-- Akhir Tampilan Table -->



<div id="copyrights">
  <div class="container">
    <p>
      &copy; BISOC FUTSAL <strong></strong>. 2020
    </p>
    <div class="credits">
      <!--
        You are NOT allowed to delete the credit link to TemplateMag with free version.
        You can delete the credit link only if you bought the pro version.
        Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/shield-bootstrap-agency-template/
        Licensing information: https://templatemag.com/license/
      -->
      Created with Shield template by <a href="https://templatemag.com/">TemplateMag</a>
    </div>
  </div>
</div>
<!-- / copyrights -->

<!-- JavaScript Libraries -->
<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../../lib/php-mail-form/validate.js"></script>
<script src="../../lib/easing/easing.min.js"></script>

<!-- Template Main Javascript File -->
<script src="../../js/main.js"></script>

</body>
</html>