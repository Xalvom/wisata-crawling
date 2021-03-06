<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php
// This snippet will print out all of the post titles in the DevDungeon.com archive.
include_once('scrap/simple_html_dom.php'); // Get simple_html_dom.php from http://simplehtmldom.sourceforge.net/
// set_time_limit(0);
$input= $_GET['lokasi'];
$lokasi = str_replace(" ", "+", $input);
$target_url = 'https://www.nativeindonesia.com/?s='.$lokasi;
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $target_url);  
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
$html = curl_exec($curl);  
curl_close($curl);  
// $html = new simple_html_dom();
$html= str_get_html($html);
?>
<?php
// This snippet will print out all of the post titles in the DevDungeon.com archive.
include_once('scrap/simple_html_dom.php'); // Get simple_html_dom.php from http://simplehtmldom.sourceforge.net/
// set_time_limit(0);
$input= $_GET['lokasi'];
$lokasi = str_replace(" ", "+", $input);
$target_url = 'https://pesona.travel/front/search?q='.$lokasi;
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $target_url);  
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
$pesona = curl_exec($curl);  
curl_close($curl);  
// $html = new simple_html_dom();
$pesona= str_get_html($pesona);
?>
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/icon.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Search Artikel <?php echo $input?></title>

	<!--
			Google Font
			============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
				<a href="index.html"><img src="img/icon-nav.png" width="80%" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="index.html">Beranda</a></li>
						<li><a href="about.html">Tentang</a></li>
						<li><a href="artikel-web.php">Artikel</a></li>
						<!--<li class="menu-has-children"><a href="">Pages</a>
							<ul>
								<li><a href="elements.html">Elements</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Blog</a>
							<ul>
								<li><a href="blog-home.html">Blog Home</a></li>
								<li><a href="blog-single.html">Blog Details</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>-->
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>
	<!-- End Header Area -->


	<!-- Start Banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Pencarian Artikel: <?php echo $input?>
					</h1>
					<!-- <p>Informasi tentang tempat wisata yang berada di seluruh penjuru indonesia yang wajib di kunjungi untuk para petualang.</p> -->
					<div class="link-nav">
						<span class="box">
							<a href="index.html">Beranda </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="search-artikel.php">Search Artikel <?php echo $input?></a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="rocket-img">
			<img src="img/rocket.png" alt="">
		</div> -->
	</section>
	<!-- End Banner Area -->

	<!-- Start top-category-widget Area -->
	<section class="top-category-widget-area pt-90 pb-90 ">
		
	</section>
	<!-- End top-category-widget Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
				<div class="row">
					<?php for($i = 0; $i < 5; $i++){?>
						<?php foreach ($html->find(".site-main") as $archiveLink) {
								 	$judul = $archiveLink->find(".entry-title a",$i)->plaintext;
									$link = $archiveLink->find(".entry-title a",$i)->href;
									$img = $archiveLink->find(".post-image img",$i)->src;
									$isi = $archiveLink->find(".entry-summary p",$i)->plaintext; ?>
									<div class="card col-lg-6 col-sm-12 mb-3">
										<img src="<?php echo $img ?>" class="card-img-top" alt="...">
										<div class="card-body">
											<a class="posts-title" href="artikel-native.php?artikel=<?php echo $link ?>">
												<h5 class="card-title"><?php echo $judul?></h5>
											</a>
											<p class="card-text text-primary font-weight-bold">nativeindonesia.com</p>
											<p class="card-text text-justify"><?php echo $isi ?></p>
										</div>
										<div class="card-footer text-center">
											<a href="artikel-native.php?artikel=<?php echo $link ?>" class="primary-btn">Selengkapnya</a>
										</div>
									</div>
							<?php } ?>
						<?php } ?>
					
				
				
					<?php for($i = 0; $i < 2; $i++){?>
						<?php $j=$i;
						$m=$i; ?>
							<?php foreach ($pesona->find(".postList") as $archiveLink) {
									 	$judul = $archiveLink->find(".list_item h5",$j)->plaintext;
										$link = $archiveLink->find(".list_item a",$i)->href;
										$img = $archiveLink->find(".agenda-list-box img",$m)->src; ?>
									<div class="card col-lg-6 col-sm-12 mb-3">
									<?php $link=$link++ ?>
										<img src="<?php echo $img ?>" class="card-img-top" alt="...">
										<div class="card-body">
											<a class="posts-title" href="artikel-pesona.php?artikel=<?php echo $link ?>">
												<h5 class="card-title"><?php echo $judul?></h5>
											</a>
											<p class="card-text text-primary font-weight-bold">pesona.travel</p>
										</div>
										<div class="card-footer text-center">
											<a href="artikel-pesona.php?artikel=<?php echo $link ?>" class="primary-btn">Selengkapnya</a>
										</div>
									</div>
							<?php } ?>
							<?php $i=$i+1; ?>
						<?php } ?>
					</div>		
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="search-artikel.php" method="GET">
								<input placeholder="Mau ke Mana?" name="lokasi" type="text">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div class="single-sidebar-widget popular-post-widget">
							<h4 class="popular-title">Artikel Terbaru</h4>
							<?php for($i = 0; $i < 3; $i++){?>
								<?php foreach ($html->find(".site-main") as $archiveLink) {?>
									<?php 	$judul = $archiveLink->find(".entry-title a",$i)->plaintext;
										$link = $archiveLink->find(".entry-title a",$i)->href;
										$img = $archiveLink->find(".post-image img",$i)->src;
										$isi = $archiveLink->find(".entry-summary p",$i)->plaintext; ?>
							<div class="popular-post-list">
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="<?php echo $img ?>" alt="">
									</div>
									<div class="details">
										<a href="artikel-native.php?artikel=<?php echo $link ?>"><h6><?php echo $judul?></h6></a>

									</div>
								</div>
							</div>
								<?php }?>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End post-content Area -->

	<!-- Start Footer Area -->
	<footer class="footer-area">
		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 single-footer-widget text-center">
					<h4>Lunga Yok! Website Informasi Pariwisata</h4>
				
					<p class="footer-text m-0 col-lg-12 col-md-12 text-center text-light">
						<strong>Website Rujukan :</strong>
						<h4>
							<a class="mr-3 text-light" href="https://www.nativeindonesia.com/" target="_blank">Native Indonesia</a> | 
							<a class="ml-3 text-light" href="https://pesona.travel/" target="_blank">Pesona Indonesia</a>
						</h4>
						<p class="text-light">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <strong>Lunga Yok!</strong>  Website Crawling dan Scraping</p>
					</p>
				</div>
			</div>
	</footer>
	<!-- End Footer Area -->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>