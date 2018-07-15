<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DisaKerja - Profil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disa Kerja - Beranda</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles-merged.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/icomoon/style.css');?>">
	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css_1/animate.css');?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css_1/icomoon.css');?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css_1/bootstrap.css');?>">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css_1/style.css');?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/js_1/modernizr-2.6.2.min.js');?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<?php 
		foreach ($profil->result() as $profil) {
	?>	
		
	<div class="fh5co-loader"></div>

	<nav class="navbar navbar-default probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" title="ProBootstrap:Frame">DisaKerja</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('disa_kerja');?>">Beranda</a></li>
            <li><a href="<?php echo site_url('disa_kerja/profil_sunting');?>">Sunting</a></li>
            <li><a href="<?php echo site_url('disa_kerja/profil_sunting_password');?>">Sunting Password</a></li>
            <li><a href="<?php echo site_url('disa_kerja/profil');?>">Profil</a></li>
            <li><a href="<?php echo site_url('disa_kerja/logout');?>">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>	
	<div id="page">	
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style="background: url(images/user-3.jpg);"></div>\
							<h1><span><?php echo $profil->nama; ?></span></h1>
							<h3><span><?php echo $profil->keahlian; ?></span></h3>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="<?php echo $profil->linked;?>"><i class="icon-linkedin2"></i></a></li>
									<li><a href="<?php echo $profil->facebook;?>"><i class="icon-dribbble2"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Tentang Saya</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">Full Name:</span><span class="second-block"><?php echo $profil->nama; ?></span></li>
						<li><span class="first-block">Phone:</span><span class="second-block"><?php echo $profil->no_hp; ?></span></li>
						<li><span class="first-block">Email:</span><span class="second-block"><?php echo $profil->email; ?></span></li>
						<li><span class="first-block">Address:</span><span class="second-block"><?php echo $profil->alamat; ?></span></li>
					</ul>
				</div>
				<div class="col-md-8">
					<h2>Hello!!</h2>
					<p><?php echo $profil->tentang;?></p>
						<ul class="fh5co-social-icons">
							<li><a href="<?php echo $profil->linked;?>"><i class="icon-linkedin2"></i></a></li>
							<li><a href="<?php echo $profil->facebook;?>"><i class="icon-dribbble2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>

	<?php } ?>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url('assets/js_1/jquery.min.js');?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('assets/js_1/jquery.easing.1.3.js');?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/js_1/bootstrap.min.js');?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('assets/js_1/jquery.waypoints.min.js');?>"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url('assets/js_1/jquery.stellar.min.js');?>"></script>
	<!-- Easy PieChart -->
	<script src="<?php echo base_url('assets/js_1/jquery.easypiechart.min.js');?>"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="<?php echo base_url('assets/js_1/google_map.js');?>"></script>
	
	<!-- Main -->
	<script src="<?php echo base_url('assets/js_1/main.js');?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>

	</body>
</html>