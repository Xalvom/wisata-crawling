<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php
// This snippet will print out all of the post titles in the DevDungeon.com archive.
include_once('scrap/simple_html_dom.php'); // Get simple_html_dom.php from http://simplehtmldom.sourceforge.net/
// set_time_limit(0);
$input= $_GET['artikel'];
$target_url = $input;
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $target_url);  
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
$html = curl_exec($curl);  
curl_close($curl);  
// $html = new simple_html_dom();
$html= str_get_html($html);

foreach ($html->find(".entry-header h1") as $archiveLink) {
    $judul = $archiveLink->plaintext;
    }
    
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
	<title><?php echo $judul; ?></title>

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

<!------ Include the above in your HEAD tag ---------->
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
						<li class="menu-active"><a href="artikel-web.php">Artikel</a></li>
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
						<?php echo $judul; ?>
					</h1>
					<p><?php echo $input; ?></p>
					<div class="link-nav">
						<span class="box">
							<a href="index.html">Beranda </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="artikel-web.php">Artikel Wisata</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- Start top-category-widget Area -->
	<!-- <section class="top-category-widget-area pt-90 pb-90 ">
		<div class="container text-center">
			<div class="row">
				<div class="col-12">
				<div class="widget-wrap">
					<div class="single-sidebar-widget search-widget">
						<form class="search-form" action="search-artikel.php" method="GET">
							<input placeholder="Mau ke Mana?" name="lokasi" type="text">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End top-category-widget Area -->
	<br><br>
	<!-- Start post-content Area -->
	<section class="post-content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<h1><?php echo $judul; ?></h1>
							<h5 class="mt-2">Sumber : <?php echo $input; ?></h5><br>
							<?php
								foreach ($html->find(".entry-content img") as $archiveLink) {
							    $img = $archiveLink->src; 
							} ?>
							<div class="feature-img">
								<img class="img-fluid" src="<?php echo $img; ?>" alt="">
							</div>
							<br>
							
							<p class="excert text-justify">
								<?php
								foreach ($html->find(".entry-content p") as $archiveLink) {
							    $isi = $archiveLink->plaintext;
							    //echo $isi ."<br> <br>";
							    
								echo $isi ."<br> <br>"; 
								} ?>
							</p>
							<?php
								foreach ($html->find(".entry-content img") as $archiveLink) {
							    $img = $archiveLink->src; 
							?>
							<div class="feature-img">
								<img class="img-fluid" src="<?php echo $img; ?>" alt="">
							</div>
							<br>
							<?php } ?>
							
						</div>
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
							<?php 
							$target_url = 'https://www.nativeindonesia.com/category/wisata/';

							$curl = curl_init(); 
							curl_setopt($curl, CURLOPT_URL, $target_url);  
							curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
							curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
							$html = curl_exec($curl);  
							curl_close($curl);  

							$html= str_get_html($html);
							for($i = 0; $i < 3; $i++){?>
								<?php foreach ($html->find(".site-main") as $archiveLink) {?>
									<?php 	$judul = $archiveLink->find(".entry-title a",$i)->plaintext;
										$link = $archiveLink->find(".entry-title a",$i)->href;
										$img = $archiveLink->find(".post-image img",$i)->src;
										$isi = $archiveLink->find(".entry-summary p",$i)->plaintext; ?>
							<div class="popular-post-list">
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="<?php echo $img ?>">
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
	<!-- <script src="js/galeri.js"></script> -->

</body>

</html>