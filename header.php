<?php
	require "admin/clasess/home.class.php";
	$homeObj = new home();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Questerra│Questerra Experiences</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="icon" type="image/png" href="images/favicon.png" />
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
		<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/revolution.css" media="screen"/>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
		<link rel="stylesheet" type="text/css" href="animation/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/color/color.css" title="color" />
	</head>

	<script>
		$(window).on("scroll", function() {
			if ($(this).scrollTop() > 100) {
			   $("header").css("background","transprent");
			}
			else{
			   $("header").css("background","transprent");
			}
		});
	</script>
	<body>
		<div class="page-loader">
			<div class="spinner">
				<div class="cube"><img src="images/loader/1.png"></div>
				<div class="cube"><img src="images/loader/2.png"></div>
				<div class="cube"><img src="images/loader/3.png"></div>
				<div class="cube"><img src="images/loader/4.png"></div>
				<div class="cube"><img src="images/loader/5.png"></div>
				<div class="cube"><img src="images/loader/6.png"></div>
				<div class="cube"><img src="images/loader/7.png"></div>
				<div class="cube"><img src="images/loader/8.png"></div>
				<div class="cube"><img src="images/loader/9.png"></div>
			</div>
		</div><!-- Page Loader -->

		
		
		<header style="background:#fff;">
			<div class="container">
				<div class="header-logo">
					<a href="index.php" title="Questerra"><img src="images/logo.png" alt=""/></a>
				</div><!-- Logo -->
				<div class="menu">
					<nav>
					
						<style>
							#active1{
							 color:#FFC801;
							}
							.change-color{ color: #ad13c3; }
							.change-color.blinking { color: #1dd7ec; }
						</style>
						
						<?php
							$active1Page = basename($_SERVER['PHP_SELF'], ".php");
							if($active1Page == 'blog-details'){
								$active1Page = 'blogs';
							}elseif($active1Page == 'tours-details'){
								$active1Page = 'tours';
							}elseif($active1Page == 'press_media-details'){
								$active1Page = 'press_media';
							}elseif($active1Page == 'facts-details'){
								$active1Page = 'facts';
							}elseif($active1Page == 'mentor-details'){
								$active1Page = 'curators';
							}
						?>
						
						<ul>
							<li><a href="about.php" id="<?= ($active1Page == 'about') ? 'active1':''; ?>">About Us</a></li>
							<li><a href="curators.php" id="<?= ($active1Page == 'curators') ? 'active1':''; ?>">Curators</a></li>
							<li><a href="tours.php" id="<?= ($active1Page == 'tours') ? 'active1':''; ?>">Tours</a></li>
							<li><a href="animation-new/index.html" id="<?= ($active1Page == 'animation') ? 'active1':''; ?>"> Virtual Tour</a></li>
							<!--<li><a href="blogs.php" id="<?= ($active1Page == 'blogs') ? 'active1':''; ?>">Blog</a></li>
							<li><a href="press_media.php" id="<?= ($active1Page == 'press_media') ? 'active1':''; ?>">Press/Media</a></li>-->
							<li><a href="why-us.php" id="<?= ($active1Page == 'why-us') ? 'active1':''; ?>">Why Us</a></li>
							<li><a href="facts.php" id="<?= ($active1Page == 'facts') ? 'active1':''; ?>">Facts</a></li>
							<li><a href="join-us.php" id="<?= ($active1Page == 'join-us') ? 'active1':''; ?>">Join Us</a></li>
							<!--<li><a href="competition-form.php" id="<?= ($active1Page == 'competition-form') ? 'active1':''; ?>">Win Experience</a></li>-->
							<li><a href="competition-form.php" class="change-color" style="background:url('images/Spreading Inspiration.jpg');">Win Trip</a></li>
							
							<script>
								var el = $('.change-color');
								setInterval(function() {
								   el.toggleClass('blinking');
								}, 1000);
							</script>
							
					   </ul>
					</nav><!-- Navigation -->
					
					<div class="social">
						<a href="apply-now.php" title=""><button type="button" class="btn btn-info">APPLY NOW</button></a>
					</div>
						<!--<div class="social">
							<a href="#" title=""><i class="fa fa-facebook"></i></a>
							<a href="#" title=""><i class="fa fa-twitter"></i></a>
							<a href="#" title=""><i class="fa fa-pinterest"></i></a>
						</div>-->
						
				</div><!-- Menu Bar -->
			</div>
		</header><!-- Header -->
		

		<div class="responsive-header">
			<div class="responsive-logo">
				<a href="index.php" title="Quest"><img src="images/logo.png" alt="Logo" /></a>
			</div><!-- Responsive Logo -->	
			
			<span><i class="fa fa-align-justify"></i></span>
			
			<ul>
				<li><a href="about.php" id="<?= ($active1Page == 'about') ? 'active1':''; ?>">About Us</a></li>
				<li><a href="curators.php" id="<?= ($active1Page == 'curators') ? 'active1':''; ?>">Curators</a></li>
				<li><a href="tours.php" id="<?= ($active1Page == 'tours') ? 'active1':''; ?>">Tours</a></li>
				<li><a href="animation-new/index.html" id="<?= ($active1Page == 'animation') ? 'active1':''; ?>">Virtual Tour</a></li>
				<!--<li><a href="blogs.php" id="<?= ($active1Page == 'blogs') ? 'active1':''; ?>">Blog</a></li>
				<li><a href="press_media.php" id="<?= ($active1Page == 'press_media') ? 'active1':''; ?>">Press/Media</a></li>-->
				<li><a href="why-us.php" id="<?= ($active1Page == 'testimonials') ? 'active1':''; ?>">Why Us</a></li>
				<li><a href="facts.php" id="<?= ($active1Page == 'facts') ? 'active1':''; ?>">Facts</a></li>
				<li><a href="join-us.php" id="<?= ($active1Page == 'join-us') ? 'active1':''; ?>">Join Us</a></li>
				<!--<li><a href="competition-form.php" id="<?= ($active1Page == 'competition-form') ? 'active1':''; ?>">Win Experience</a></li>-->
				<li><a href="competition-form.php" class="change-color">Win Trip</a></li>
			</ul>
			
		</div><!--Responsive header -->
		
		<!------------------- google analytics ---------------------->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-96839362-1', 'auto');
		  ga('send', 'pageview');
		
		</script>
		<!------------------- google analytics ----------------------->
		
		
		<!---------http://pasted.co/1a968ab5-------------->