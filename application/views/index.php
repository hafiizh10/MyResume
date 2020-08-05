<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Hafiizh Zoelva Khairani</title>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
	<link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: MyResume - v2.1.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Mobile nav toggle button ======= -->
	<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

	<!-- ======= Header ======= -->
	<header id="header" class="d-flex flex-column justify-content-center">

		<nav class="nav-menu">
			<ul>
				<li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
				<li><a href="#about"><i class="bx bx-user"></i> <span>Tentang</span></a></li>
				<li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Ringkasan</span></a></li>
				<li><a href="#portfolio"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
				<li><a href="#services"><i class="bx bx-server"></i> <span>Info</span></a></li>
				<li><a href="<?= base_url('home') ?>"><i class="bx bx-edit"></i> <span>Edit Resume</span></a></li>
			</ul>
		</nav><!-- .nav-menu -->

	</header><!-- End Header -->
	<?php foreach ($biodata as $bio) : ?>
		<!-- ======= Hero Section ======= -->
		<section id="hero" class="d-flex flex-column justify-content-center">
			<div class="container" data-aos="zoom-in" data-aos-delay="100">
				<h1><?= $bio['nama']; ?></h1>
				<p>I'm <span class="typed" data-typed-items="<?= $bio['spesialis'] ?>"></span></p>
				<div class="social-links">
					<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
					<a href="https://www.facebook.com/hafizh.khairani" class="facebook"><i class="bx bxl-facebook"></i></a>
					<a href="https://www.instagram.com/fizh_zoelva/" class="instagram"><i class="bx bxl-instagram"></i></a>
					<a href="https://github.com/hafiizh10" class="google-plus"><i class="bx bxl-github"></i></a>
					<a href="https://www.linkedin.com/in/zoelva-khairani/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
				</div>
			</div>
		</section><!-- End Hero -->

		<main id="main">

			<!-- ======= About Section ======= -->
			<section id="about" class="about">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Tentang</h2>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
						</div>
						<div class="col-lg-8 pt-4 pt-lg-0 content">
							<div class="row">
								<div class="col-lg-6">
									<ul>
										<li><i class="icofont-rounded-right"></i> <strong>Nama Lengkap:</strong> <?= $bio['nama'] ?></li>
										<li><i class="icofont-rounded-right"></i> <strong>Website:</strong> <?= $bio['website'] ?></li>
										<li><i class="icofont-rounded-right"></i> <strong>Telepon/WA:</strong> <?= $bio['telepon'] ?></li>
										<li><i class="icofont-rounded-right"></i> <strong>Asal:</strong> <?= $bio['asal'] ?>
										</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul>
										<li><i class="icofont-rounded-right"></i> <strong>Umur:</strong> <?= $bio['umur'] ?></li>
										<li><i class="icofont-rounded-right"></i> <strong>Pekerjaan:</strong> <?= $bio['pekerjaan'] ?></li>
									</ul>
								</div>
							</div>
							<p>
								<?= $bio['deskripsi'] ?>
							</p>
						</div>
					</div>
				<?php endforeach; ?>
				</div>
			</section><!-- End About Section -->

			<!-- ======= Facts Section ======= -->
			<section id="facts" class="facts">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Keahlian</h2>
					</div>
					<p>
						Berikut beberapa keahlian yang saya miliki sebagai Web Developer :<br>
						<ul style="list-style-type:circle">
							<li>Backend</li>
							- PHP Native
							<li>Frontend</li>
							- Web Design (HTML CSS)<br>
							- Framework : Bootstrap
							<li>Database</li>
							- SQL (MySQL)
							<li>Dan lain-lain</li>
							- Build Wordpress (include hosting dan domain berkualitas)<br>
							- Desain Grafis (Adobe Photoshop, Adobe XD)<br>
							- Editing Video (Adobe Premier & Wondershare Filmora)
						</ul>
					</p>
				</div>
				</div>
				</div>
			</section><!-- End Facts Section -->

			<!-- ======= Skills Section ======= -->
			<section id="skills" class="skills section-bg">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Rencana dan Project</h2>
					</div>
					<p>
						Berikut rencana dan project saya di tahun 2020 :<br>
						<ul style="list-style-type:circle">
							<li>Memperdalam beberapa Framework PHP</li>
							<li>Menguasai Git dan GitHub</li>
							<li>Menambah Skill saya dalam Web Developer (Backend & Frontend)</li>
							<li>Membuat beberapa porject Web</li>
							<li>Mengikuti Seminar dan Sertifikasi untuk menambah pengetahuan dan wawasan</li>
						</ul>
					</p>
				</div>
				</div>
				</div>
			</section><!-- End Skills Section -->

			<!-- ======= Resume Section ======= -->
			<section id="resume" class="resume">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Ringkasan Saya</h2>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<h3 class="resume-title">Pendidikan</h3>
							<div class="resume-item">
								<h4>SMK TELKOM BANJARBARU - TKJ</h4>
								<h5>2015 - 2018</h5>
								<p>#</p>
							</div>
							<div class="resume-item">
								<h4>STMIK BANJARBARU - S1 Teknik Informatika</h4>
								<h5>2018 - Sekarang</h5>
								<p>#</p>
							</div>
						</div>
						<div class="col-lg-6">
							<h3 class="resume-title">Pengalaman</h3>
							<div class="resume-item">
								<h4>Project Webtools</h4>
								<h5>2014 - 2015</h5>
								<ul>
									<p>Project Webtools adalah sebuah Web E-Commerce yang menyediakan jasa penjualan dan pembelian untuk
										pemain game di Facebook atau game online lainnya, dalam Project Webtools ini saya termasuk salah satu
										pengembang sebagai penyedia layanan Website nya. Saya membuat bagaimana agar Web ini dapat memberikan
										keuntungan bagi Reseller dengan menambahkan sistem pembayaran untuk setiap jasa atau layanannya.</p>
								</ul>
							</div>
							<div class="resume-item">
								<h4>PKL - PT ANGKASA PURA I SYAMSUDIN NOOR</h4>
								<h5>2017</h5>
								<ul>
									<p>Dalam keseharian, saya banyak berkerja bersama Staff IT Support seperti Pengecekan kecepetan Wi-Fi di
										Terminal, Troubleshooting, dan Maintaince perangkat hardware maupun jaringan yang bermasalah, Salah
										satu pencapaian yang pernah saya dapatkan adalah ketika berhasil merancang dan membuat sebuah aplikasi
										layanan elektronik berbasis Web yang digunakan untuk mendukung kelancaran proses reporting kerja
										perusahaan atau disebut juga E-Logbook.</p>
								</ul>
							</div>
							<div class="resume-item">
								<h4>Project Website IEA Banjarbaru</h4>
								<h5>2019 - Sekarang</h5>
								<ul>
									<p>Website IEA Banjarbaru merupakan website organisasi yang dimiliki oleh Indonesian Escorting Ambulance
										Wilayah Banjarbaru sebagai media informasi dan pelayanan kepada masyarakat luas. Website ini mempunyai
										banyak fitur yang digunakan untuk memudahkan anggota IEA dalam menjalankan tugasnya. Dengan adanya
										website ini semoga nantinya dapat membantu masyarakat yang membutuhkan pelayanan secara gratis.
										Website IEA Banjarbaru ini akan terus di kembangkan agar bermanfaaat bagi semua orang.</p>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</section><!-- End Resume Section -->

			<!-- ======= Portfolio Section ======= -->
			<section id="portfolio" class="portfolio section-bg">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Portfolio Saya</h2>
					</div>

					<div class="row">
						<div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
							<ul id="portfolio-flters">
								<li data-filter="*" class="filter-active">All</li>
								<li data-filter=".filter-app">Certificate</li>
								<li data-filter=".filter-card">Seminar</li>
								<li data-filter=".filter-web">Portfolio</li>
							</ul>
						</div>
					</div>

					<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

						<?php foreach ($portfolio as $pf) : ?>
							<div class="col-lg-4 col-md-6 portfolio-item <?= $pf['filter']; ?>">
								<div class="portfolio-wrap">
									<img src='<?= $pf['link']; ?>' style="width: 350px; height: 250px" />
									<div class="portfolio-info">
										<h4><?= $pf['jenis']; ?></h4>
										<p><?= $pf['judul']; ?></p>
										<div class="portfolio-links">
											<a href="<?= $pf['link']; ?>" class="venobox" title="<?= $pf['judul']; ?>"><i class="bx bx-search"></i></a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section><!-- End Portfolio Section -->

			<!-- ======= Services Section ======= -->
			<section id="services" class="services">
				<div class="container" data-aos="fade-up">

					<div class="section-title">
						<h2>Video Porfil Zoelva</h2>
						<p>
							<div class="video-container"><iframe width="500" height="315" src="https://www.youtube.com/embed/-z8wcCdpcNw" frameborder="0" allowfullscreen></iframe></div>
						</p>
					</div>

				</div>
			</section><!-- End Services Section -->

		</main><!-- End #main -->

		<!-- ======= Footer ======= -->
		<footer id="footer">
			<div class="container">
				<h3>Hafiizh Zoelva Khairani</h3>
				<div class="social-links">
					<a href="https://wa.me/6282157254820" class="twitter"><i class="bx bxl-whatsapp"></i></a>
					<a href="https://www.facebook.com/hafizh.khairani" class="facebook"><i class="bx bxl-facebook"></i></a>
					<a href="https://www.instagram.com/fizh_zoelva/" class="instagram"><i class="bx bxl-instagram"></i></a>
					<a href="https://github.com/hafiizh10" class="google-plus"><i class="bx bxl-github"></i></a>
					<a href="https://www.linkedin.com/in/zoelva-khairani/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
				</div>
				<div class="copyright">
					&copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
				</div>
				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: [license-url] -->
					<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
					Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
				</div>
			</div>
		</footer><!-- End Footer -->

		<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
		<div id="preloader"></div>

		<!-- Vendor JS Files -->
		<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>
		<script src="<?= base_url() ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/counterup/counterup.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/venobox/venobox.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/typed.js/typed.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>

		<!-- Template Main JS File -->
		<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>