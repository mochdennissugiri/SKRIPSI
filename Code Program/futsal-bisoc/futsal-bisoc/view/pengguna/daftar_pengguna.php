<?php 

require_once'../../function/connection.php';	

if (isset($_POST['simpan'])){
	header("Location:../index.php");
	$nama_team = $_POST['nama_team'];
	$tempat_lapang = $_POST['tempat_lapang'];
	$mulai_jam = $_POST['mulai_jam'];
	$akhir_jam = $_POST['akhir_jam'];
	


	$sql = "INSERT INTO pengguna(nama_team,tempat_lapang,mulai_jam,akhir_jam) VALUES('$nama_team','$tempat_lapang','$mulai_jam','$akhir_jam')";

	$query = mysqli_query($link,$sql);
}

?>

<!DOCTYPE html >
<html>
<head>
	<meta charset="utf-8">
  <title>DAFTAR PENGGUNA BISOC FUTSAL</title>
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
		            <li><a href="../../index.php">Beranda</a></li>		        
			            <li> <a href="../jadwal/jadwal.php">Jadwal</a></li>
			            <li> <a href="../booking/booking.php">Booking</a></li>
			            <li> <a href="../booking/daftar_booking.php">Daftar Booking</a></li>
			            <li> <a href="../pengguna/pengguna.php">Pengguna</a></li>
			            <li class="active"> <a href="../pengguna/daftar_pengguna.php">Daftar Pengguna</a></li>
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
			    <h1 class="centered">DAFTAR PENGGUNA</h1>
			    <hr>

			 		<!-- Isi Table -->
				<div class="col-lg-12">
					<form action="" method="POST">
					<?php 

						$querypengguna = mysqli_query($link, "SELECT * FROM pengguna");
						if (mysqli_num_rows($querypengguna) == 0) {
							echo "Gagal menampilkan data";
						}else{

					 ?>
					<table class="table table-sm" border="3">

					<thead>
					<tr>
					<th>no</th>
					<th>Nama Team</th>
					<th>tempat lapang</th>
					<th>Waktu Mulai</th>
					<th>Waktu Akhir</th>
					<th>action</th>
				</tr>
				</thead>
				<?php  
					$no = 1;
					while ($row = mysqli_fetch_assoc($querypengguna)) {
				?>
				<tbody>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $row['nama_team']; ?></td>
						<td><?php echo $row['tempat_lapang']; ?></td>
						<td><?php echo $row['mulai_jam'] ;?></td>
						<td><?php echo $row['akhir_jam']; ?></td>
						<td>
							<button type="submit" class="btn btn-large"><a href="hapus_pengguna.php?id=<?= $row['id'];  ?>" type="button">HAPUS</a></button>
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