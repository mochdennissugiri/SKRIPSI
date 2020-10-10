<?php 

require_once'function/connection.php';

    session_start();
 
 $search = isset($_GET["search"]) ? $_GET["search"] : false;

    $where = "";
    $search_url = "";

    if ($search) {
      $search_url = "&search=$search";
      $where = "WHERE data_barang.kode_barang LIKE '%$search%' ";
   }

   $level = isset($_SESSION['level']) ? $_SESSION['level'] : false;


 ?>
  


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bisoc Futsal</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/icomoon/icomoon.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="fontawasome/css/all.min.css">

  <!-- =======================================================
    Template Name: Shield
    Template URL: https://templatemag.com/shield-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navbar-main">
  <?php 
         session_start();
        if ($_SESSION['status']!="login") {
        header("location: login.php?pesan=belum_login");
        }
        ?>


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
            <li> <a href="#home" class="smoothscroll">Beranda</a></li>
            <li> <a href="#about" class="smoothscroll"> About</a></li>
            <li> <a href="#services" class="smoothscroll"> Services</a></li>
            <li> <a href="#team" class="smoothscroll"> Team</a></li>
            <li> <a href="#portfolio" class="smoothscroll"> Portfolio</a></li>
            <li> <a href="#contact" class="smoothscroll"> Contact</a></li>
            <li> <a href="login/logout.php"> logout</a></li>
           <?php if ($level == "admin") { ?> 
            <li> <a href="view/jadwal/jadwal.php">| &nbsp; &nbsp; Jadwal</a></li>
           <?php } ?>
            <li> <a href="view/booking/booking.php">Booking</a></li>
           <?php if ($level == "admin") { ?> 
            <li> <a href="view/booking/daftar_booking.php">Daftar Booking</a></li>
            <?php } ?>
            <li> <a href="view/pengguna/pengguna.php">Pengguna</a></li>
           <?php if ($level == "admin") { ?>
            <li> <a href="view/pengguna/daftar_pengguna.php">Daftar Pengguna</a></li>
            <?php } ?>
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <!-- ==== HEADERWRAP ==== -->
  <div id="home"></div>
  <div id="headerwrap" name="home">
    <header class="clearfix">
      <h1><span class="icon icon-shield"></span></h1>
      <p>SELAMAT DATANG DI BISOC FUTSAL</p>
    </header>
  </div>
  <!-- /headerwrap -->

  <!-- ==== GREYWRAP ==== -->
  <div id="greywrap">
    <div class="row">
      <div class="col-lg-6 callout">
        <span class="icon icon-stack"></span>
        <h2>Bisoc Futsal</h2>
        <p>Bisoc Futsal merupakan tempat futsal yang ada di daerah batununggal dengan pengaksesan yang sangat mudah.</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-6 callout">
        <span class="icon icon-eye"></span>
        <h2>Retina Ready</h2>
        <p>You can use this theme with your iPhone, iPad or MacBook Pro. This theme is retina ready and that is awesome. </p>
      </div>
      <!-- col-lg-4 -->
    </div>
    <!-- row -->
  </div>
  <!-- greywrap -->

  <!-- ==== ABOUT ==== -->
  <div class="container" id="about" name="about">
    <div class="row white">
      <br>
      <h1 class="centered">A LITTLE ABOUT OUR AGENCY</h1>
      <hr>

      <div class="col-lg-6">
        <p>We believe ideas come from everyone, everywhere. In fact, at TemplateMag, everyone within our agency walls is a designer in their own right. And there are a few principles we believe—and we believe everyone should believe—about our design craft.
          These truths drive us, motivate us, and ultimately help us redefine the power of design. We’re big believers in doing right by our neighbors. After all, we grew up in the Twin Cities and we believe this place has much to offer. So we do what
          we can to support the community we love.</p>
      </div>
      <!-- col-lg-6 -->

      <div class="col-lg-6">
        <p>Over the past four years, we’ve provided more than $1 million in combined cash and pro bono support to Way to Grow, an early childhood education and nonprofit organization. Other community giving involvement throughout our agency history includes
          pro bono work for more than 13 organizations, direct giving, a scholarship program through the Minneapolis College of Art & Design, board memberships, and ongoing participation in the Keystone Club, which gives five percent of our company’s
          earnings back to the community each year.</p>
      </div>
      <!-- col-lg-6 -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->

  <!-- ==== SECTION DIVIDER1 -->
  <section class="section-divider textdivider textdivider2 divider1">
    <div class="container">
      <h1>SALAM OLAHRAGA</h1>
      <hr>
      <p>Bisoc Futsal merupakan tempat futsal daerah batununggal indah dengan lingkungan yang strategis</p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->


  <!-- ==== SERVICES ==== -->
  <div class="container" id="services" name="services">
    <br>
    <br>
    <div class="row">
      <h2 class="centered">TENTANG FUTSAL.</h2>
      <hr>
      <br>
      <div class="col-lg-offset-2 col-lg-8">
        <p style="text-align: justify;">Futsal adalah permainan bola yang dimainkan oleh dua tim, yang masing-masing beranggotakan lima orang. Tujuannya adalah memasukkan bola ke gawang lawan, dengan memanipulasi bola dengan kaki. Selain lima pemain utama, setiap regu juga diizinkan memiliki pemain cadangan. Tidak seperti permainan sepak bola dalam ruangan lainnya, lapangan futsal dibatasi garis, bukan net atau papan.
        Futsal turut juga dikenali dengan berbagai nama lain. Istilah "futsal" adalah istilah internasionalnya, berasal dari kata Spanyol atau Portugis, futbol (sepak bola) dan sala (dalam ruangan). 
        
      </div>
      <!-- col-lg -->
    </div>
    <!-- row -->

    <!-- <div class="row"> -->
      <!-- <h2 class="centered">MOBILE FIRST THINKING, ALWAYS.</h2>
      <hr>
      <br>
      <div class="col-lg-offset-2 col-lg-8">
        <img class="img-responsive" src="img/iphone.png" alt="">
      </div>
      < !-- col -->
    </div>
    <!-- row -->
  </div>
  <!-- container --> -->

  <!-- ==== TEAM MEMBERS ==== -->
  <div class="container" id="team" name="team">
    <br>
    <div class="row white centered">
      <h1 class="centered">ADMIN</h1>
      <hr>
      <br>
      <div class="col-lg-12 centered">
        <img class="img img-thumbnail" src="img/team/me.jpg" height="120px" width="120px" alt="">
        <br>
        <h4><b>MOCH DENNIS SUGIRI</b></h4>
       
        <p>.</p>
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
  <!-- ==== SECTION DIVIDER3 -->
  <!-- <section class="section-divider textdivider divider3">
    <div class="container">
      <h1>DESIGN SOLVE PROBLEMS</h1>
      <hr>
      <p>From the purely practical to the richly philosophical, design is the solution to a host of challenges.</p>
    </div>
    < !-- container -->
  </section>
  <!-- section --> -->

  <!-- ==== PORTFOLIO ==== -->
  <div class="container" id="portfolio" name="portfolio">
    <br>
    <div class="row">
      <br>
      <h1 class="centered">FOTO-FOTO LAPANGAN</h1>
      <hr>
      <br>
      <br>
    </div>
    <!-- /row -->
    <div class="container">
      <div class="row">

        <!-- PORTFOLIO IMAGE 1 -->
        <div class="col-md-4 ">
          <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/lapang/sintetis1.jpg" alt="">
              <figcaption>
                <h5>Sintetis</h5>
              </figcaption>
              <!-- /figcaption -->
            </figure>
            <!-- /figure -->
          </div>
          <!-- /grid-mask -->
        </div>
        <!-- /col -->


        <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Project Title</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="img/portfolio/folio01.jpg" alt=""></p>
                <p>This project was crafted for Some Name corp. Detail here a little about your job requirements and the tools used. Tell about the challenges faced and what you and your team did to solve it.</p>
                <p><b><a href="#">Visit Site</a></b></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <!-- PORTFOLIO IMAGE 2 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/portfolio/folio02.jpg" alt="">
              <figcaption>
                <h5>UI DESIGN</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption>
              <!-- /figcaption -->
            </figure>
            <!-- /figure -->
          </div>
          <!-- /grid-mask -->
        </div>
        <!-- /col -->

        <!-- PORTFOLIO IMAGE 3 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/portfolio/folio03.jpg" alt="">
              <figcaption>
                <h5>ANDROID PAGE</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption>
              <!-- /figcaption -->
            </figure>
            <!-- /figure -->
          </div>
          <!-- /grid-mask -->
        </div>
        <!-- /col -->
      </div>
      <!-- /row -->

      <!-- PORTFOLIO IMAGE 4 -->
      <div class="row">
        <div class="col-md-4 ">
          <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/portfolio/folio04.jpg" alt="">
              <figcaption>
                <h5>PROFILE</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption>
              <!-- /figcaption -->
            </figure>
            <!-- /figure -->
          </div>
          <!-- /grid-mask -->
        </div>
        <!-- /col -->

        <!-- PORTFOLIO IMAGE 5 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/portfolio/folio05.jpg" alt="">
              <figcaption>
                <h5>TWITTER STATUS</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption>
              <!-- /figcaption -->
            </figure>
            <!-- /figure -->
          </div>
          <!-- /grid-mask -->
        </div>
        <!-- /col -->

        <!-- PORTFOLIO IMAGE 6 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/portfolio/folio06.jpg" alt="">
              <figcaption>
                <h5>PHONE MOCKUP</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption>
              <!-- /figcaption -->
            </figure>
            <!-- /figure -->
          </div>
          <!-- /grid-mask -->
        </div>
        <!-- /col -->
      </div>
      <!-- /row -->
      <br>
      <br>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
  <!-- ==== SECTION DIVIDER6 ==== -->
  <section class="section-divider textdivider divider6">
    <div class="container">
      <h1>TEMPAT LOKASI</h1>
      <hr>
      <p>Some Address 987,</p>
      <p>+34 9884 4893</p>
      <p><a class="icon icon-twitter" href="#"></a> | <a class="icon icon-facebook" href="#"></a></p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->

  <div class="container" id="contact" name="contact">
    <div class="row">
      <br>
      <h1 class="centered">TERIMA KASIH ATAS KUNJUNGANNYA</h1>
      <hr>
      <br>
      <br>

      <div class="col-lg-4">
        <!-- <h3>About Us</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <h3>Newsletter</h3> -->
        
      </div>
      <!-- col -->

      
      <!-- col -->

      

          </form>
      </div>
      <!-- col -->

    </div>
    <!-- row -->

  </div>
  <!-- container -->


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
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/php-mail-form/validate.js"></script>
<script src="lib/easing/easing.min.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>
</html>
