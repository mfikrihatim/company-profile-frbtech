<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FRB Technology</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

	<!-- Only For Carousel
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

  <!-- Favicons -->
  <link href="assets/index/img/favicon.png" rel="icon">
  <link href="assets/index/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Fontawesome 5.15.3-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/index/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/index/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/index/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/index/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/index/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/index/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php"><span style="color: #36b9e3;"> FRB </span> Technology</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#client">Client</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
				</ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
	<!-- End Header -->

  <!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center ">
		<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-indicators justify-content-center mx-auto mb-5" style="color: black;">
				<?php 
					$i = 0;
					foreach ($data_slider as $dasi) {
						$actives = '';
						if($i == 0){
							$actives = 'active';
						}
				?>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i; ?>" class="<?= $actives; ?> mx-1 p-1bg-primary"></button>
				<?php $i++; } ?>
			</div>

			<div class="carousel-inner">
				<?php 
					$i = 0;
					foreach ($data_slider as $dasi) {
						$actives = '';
						if($i == 0){
							$actives = 'active';
              
						}
				?>
				<div class="carousel-item <?= $actives; ?>">
					<div class="row">
						<div class="d-block w-100">
							<img src="<?php echo base_url('././upload/slider/'.$dasi->foto) ?>" class="img-fluid animated fade-out-left">
							<div class="carousel-caption mb-5">
								<h1 class="text-white display-1"><?= $dasi->judul; ?></h1>
								<h2 class="text-white"><?= $dasi->deskripsi; ?></h2>
							</div>
						</div>
					</div>
				</div>	
				<?php $i++; } ?>
			</div>
		</div>
		
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
		
  </section>
	<!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/index/img/about.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>WHY US?</h3>
            <p class="fst-italic">
							Why You Choose <span style="color: #36b9e3;">FRB Technology</span>
            </p>
            <ul>
							<i class="bi bi-check-circle"> Trusted </i>
              <li>  We have been trusted by many clients and for us trust is the main thing. </li>
							<li></li>

              <i class="bi bi-trophy-fill"> Profesional</i>
							<li> We have people who are professionals in their fields.</li>
							<li></li>

              <i class="bi bi-phone"> Great Support</i>
							<li> We fully support your request, and we are ready to help whatever your business problem.</li>
              <li></li>

							<i class="bi bi-person-check-fill"> Dedicated contact</i>
							<li> We have people who have been dedicated for years in technology</li>
							<li></li>
						</ul>
          </div>
        </div>

      </div>
    </section>
		<!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section> -->
		<!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
			<div class="container">
				
				<div class="section-title">
					<span>Services</span>
          <h2>Services</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>
				
				<div class="row mx-auto">
					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-world"></i></div>
							<h4 class="title"><a href="#">WEBSITE</a></h4>
							<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-mobile-alt"></i></div>
							<h4 class="title"><a href="#">MOBILE</a></h4>
							<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-layout"></i></div>
							<h4 class="title"><a href="#">UI/UX DESIGN</a></h4>
							<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-desktop"></i></div>
							<h4 class="title"><a href="#">DEKSTOP</a></h4>
							<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
						</div>
					</div>
        </div>

      </div>
    </section>
		<!-- End Services Section -->

    <!-- ======= client Section ======= -->
    <section id="client" class="client">
      <div class="container">

        <div class="section-title">
          <span>Client</span>
          <h2>Client</h2>
          <p>Ini test design client dan masih memakai data product di template bagian client</p>
        </div>

        <div class="row client-container">
					
					<?php foreach($data_client as $dacli): ?>
          <div class="col-lg-4 col-md-6 client-item filter-app">
            <img src="<?php echo base_url('././upload/client/'.$dacli->logo_client) ?>" class="img-fluid" alt="">
            <div class="client-info">
              <h4><?= $dacli->nama_client; ?></h4>
              <a href="<?php echo base_url('././upload/client/'.$dacli->logo_client); ?>" data-gallery="clientGallery" class="client-lightbox preview-link" title="<?= $dacli->nama_client ?>"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
					<?php endforeach; ?>

        </div>

      </div>
    </section>
		<!-- End client Section -->

		<!-- ======= contact Section ======= -->
		<section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <span>contact</span>
          <h2>contact</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
					
					<div class="card mx-auto my-2" style="border: none; background: none; width: 18rem;">
						<div class="card-body">
							<div class="icon-box">
								<div class="icon"><i class="bi bi-geo-alt"></i></div>
								<p class="card-text">Bogor, Indonesia</p>
							</div>
						</div>
					</div>

					<div class="card mx-auto my-2" style="border: none; background: none; width: 18rem;">
						<div class="card-body">
							<div class="icon-box">
								<div class="icon"><i class="bi bi-envelope"></i></div>
								<p class="card-text">info@frbtech.id</p>
							</div>
						</div>
					</div>

					<div class="card mx-auto my-2" style="border: none; background: none; width: 18rem;">
						<div class="card-body">
							<div class="icon-box">
								<div class="icon"><i class="bi bi-phone"></i></div>
								<p class="card-text">+62 812-1847-7162</p>
							</div>
						</div>
					</div>

        </div>

      </div>
    </section>
		<!-- End contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>FRB Technology</h3>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>FRB Technology</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/index/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/index/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/index/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/index/vendor/php-email-form/validate.js"></script>
  <script src="assets/index/vendor/purecounter/purecounter.js"></script>
  <script src="assets/index/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/index/js/main.js"></script>

</body>

</html>
