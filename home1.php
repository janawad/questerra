<style>
#mask {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 9000;
  background-color: #000;
  display: none;
}

#boxes .window {
  position: absolute;
  left: 0;
  top: 0;
  width: 440px;
  height: 200px;
  display: none;
  z-index: 9999;
  padding: 20px;
  border-radius: 15px;
  text-align: center;
}

#boxes #dialog {
  width: 750px;
  height: 500px;
  padding: 10px;
  background-color: transparent;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}

#popupfoot {
  font-size: 16pt;
  position: absolute;
  bottom: 0px;
  width: 250px;
  left: 250px;
}
</style>
<div id="boxes">
  <div id="dialog" class="window">
    Your Content Goes Here
	<link href="slide/css/bootstrap.min.css" rel="stylesheet">
						<link href="slide/css/full-slider.css" rel="stylesheet">
						<a href="#" class="close" style="font-size:50px;">X</a>
						<header id="myCarousel" class="carousel slide">
						
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
<style>.fill{
margin: 0 auto;
  padding: 0;

  
  background-position: top center;
  background-repeat: no-repeat;
background-size: 100% 100%;}
</style>
							<!-- Wrapper for Slides -->
							<div class="carousel-inner">
								<div class="item active">
									<!-- Set the first background image using inline CSS below. -->
									<div class="fill" style="background-image:url('images/slider/slide1.jpg');"></div>
									<!--<div class="carousel-caption">
										<h2>Caption 1</h2>
									</div>-->
								</div>
								<div class="item">
									<!-- Set the second background image using inline CSS below. -->
									<div class="fill" style="background-image:url('images/slider/slide2.jpg');"></div>
									<!--<div class="carousel-caption">
										<h2>Caption 2</h2>
									</div>-->
								</div>
								<div class="item">
									<!-- Set the third background image using inline CSS below. -->
									<div class="fill" style="background-image:url('images/slider/slide3.jpg');"></div>
									<!--<div class="carousel-caption">
										<h2>Caption 3</h2>
									</div>-->
								</div>
							</div>

							<!-- Controls -->
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="icon-prev"></span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="icon-next"></span>
							</a>

						</header>
						<script src="slide/js/jquery.js"></script>

						<!-- Bootstrap Core JavaScript -->
						<script src="slide/js/bootstrap.min.js"></script>

						<!-- Script to Activate the Carousel -->
						<script>
						$('.carousel').carousel({
							interval: 5000 //changes the speed
						})
						</script>
    
  </div>
  <div id="mask"></div>
</div>
<script>
$(document).ready(function() {	

var id = '#dialog';
	
//Get the screen height and width
var maskHeight = $(document).height();
var maskWidth = $(window).width();
	
//Set heigth and width to mask to fill up the whole screen
$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
$('#mask').fadeIn(500);	
$('#mask').fadeTo("slow",0.9);	
	
//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();
              
//Set the popup window to center
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
	
//transition effect
$(id).fadeIn(2000); 	
	
//if close button is clicked
$('.window .close').click(function (e) {
//Cancel the link behavior
e.preventDefault();

$('#mask').hide();
$('.window').hide();
});

//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
	
});
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
	
		
		<!----sliders ------>
		<div class="slider">
			<div class="tp-banner-container">
				<div class="tp-banner blackish">
					<ul>	
						<li data-transition="fadetotopfadefrombottom" data-slotamount="10" data-masterspeed="1000" >
							
							<img class="lazy" src="images/resource/slider.jpg"  alt="slidebg3" data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat">
							
							<!--<div class="tp-caption sfr" data-x="800" data-y="150" data-speed="2000" data-start="3000" data-easing="Back.easeOut" data-captionhidden="on">
								<img class="lazy"  src="images/plane.png" alt=""  />
							</div>-->
							
							<div class="tp-caption sfb slide1-subtitle" data-x="center" data-y="240" data-speed="2000" data-start="1000" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:16px;letter-spacing:16px; color:#4B4479;">Inspiring Occupational journey</div>
							
							<div class="tp-caption sft slide1-title" data-x="center" data-y="290" data-speed="2000" data-start="1200" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:50px; padding:40px 100px;">Explore. <span>Learn.</span> Grasp. <span>Adapt</span></div>
							
							<div class="tp-caption sfb slide1-desc" data-x="center" data-y="440" data-speed="2000" data-start="1300" data-easing="Back.easeOut" data-captionhidden="on">Hand crafted domain specific tours for professionals and passionates, <br>with elements of insightful learning, building camarderie, <br>entertainment and solid networking;</div>
							
							<!--<div class="tp-caption sft slide1-button" data-x="center" data-y="540" data-speed="2000" data-start="1600" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:13px;padding:5px 40px;">Read More</div>-->
						</li><!-- Slide 1 -->

						<li data-transition="zoomout" data-slotamount="10" data-masterspeed="1000">
							<img class="lazy" src="images/resource/slider2.jpg"  alt="slidebg3"  data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat">
							
							<div class="tp-caption sfl slide2-subtitle" data-x="0" data-y="240" data-speed="2000" data-start="1000" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:16px;">Inspiring Occupational journey</div>
							
							<div class="tp-caption sfl line" data-x="0" data-y="280" data-speed="2000" data-start="1400" data-easing="Back.easeOut" data-captionhidden="on" style="width:104px; height:2px; background:#e74c3c;"></div>
							
							<div class="tp-caption sfl slide2-title" data-x="0" data-y="320" data-speed="2000" data-start="1800" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:72px; letter-spacing:10px;">Explore. Learn. </div>
							
							<div class="tp-caption sfl slide2-subtite2" data-x="0" data-y="400" data-speed="2000" data-start="2200" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:48px; letter-spacing:3px;">Grasp. Adapt</div>
							
							<div class="tp-caption sfb slide2-desc" data-x="0" data-y="460" data-speed="2000" data-start="2600" data-easing="Back.easeOut" data-captionhidden="on">Hand crafted domain specific tours for professionals and passionates, <br>with elements of insightful learning, building camarderie,<br> entertainment and solid networking;   </div>
							<div class="tp-caption sfl" data-x="550" data-y="300" data-speed="2000" data-start="3000" data-easing="Back.easeOut" data-captionhidden="on">
								<img class="lazy" src="images/auto.png" alt="" />
							</div>
						</li><!-- Slide 2-->

					</ul>
				</div>	
			</div><!-- REVOLUTION SLIDER -->	
		</div><!-- Slider -->
		
		
		
		<section>
			<div class="block-fact remove-gap">
				<div class="container">
					<div class="row" style="padding-bottom: 10px;transition-duration: 6s;">
						<div class="col-md-offset-1 col-md-10">
							<div class="services-carousel overlap">
								<div class="service-row">
									<div class="service item1">
										<div class="service-img">
											<img class="lazy" src="images/resource/1.jpg" alt="" />
										</div>
										<div class="service-detail">
											<h3>Driving passion</h3>
											<p>Fueling your desire to learn more about your chosen subject</p>
										</div>
										<div class="service-icon"><i class="fa fa-thumbs-o-up"></i></div>
									</div><!-- Service Item -->
									<div class="service item2">
										<div class="service-img">
											<img class="lazy" src="images/resource/1.jpg" alt="" />
										</div>
										<div class="service-detail">
											<h3>Spreading Inspiration</h3>
											<p>Inspiring you to relive the past and shape the future</p>
										</div>
										<div class="service-icon"><i class="fa fa-thumbs-o-up"></i></div>
									</div><!-- Service Item -->
									<div class="service item3">
										<div class="service-img">
											<img class="lazy" src="images/resource/1.jpg" alt="" />
										</div>
										<div class="service-detail">
											<h3>Handcrafted Experieces</h3>
											<p>Locals and industry experts designing your journey to the last mile</p>
										</div>
										<div class="service-icon"><i class="fa fa-thumbs-o-up"></i></div>
									</div><!-- Service Item -->
								</div><!-- Service Row-->
								<div class="service-row">
									<div class="service item1">
										<div class="service-img">
											<img class="lazy" src="images/resource/2.jpg" alt="" />
										</div>
										<div class="service-detail">
											<h3>Expanding your horizons</h3>
											<p>Adding plethoric perspectives to your thoughts.</p>
										</div>
										<div class="service-icon"><i class="fa fa-handshake-o"></i></div>
									</div><!-- Service Item -->
									<div class="service item2">
										<div class="service-img">
											<img class="lazy" src="images/resource/2.jpg" alt="" />
										</div>
										<div class="service-detail">
											<h3>Lasting networks</h3>
											<p>Making friends around the world who share the same interests/profession.</p>
										</div>
										<div class="service-icon"><i class="fa fa-handshake-o"></i></div>
									</div><!-- Service Item -->
									<div class="service item3">
										<div class="service-img">
											<img class="lazy" src="images/resource/2.jpg" alt="" />
										</div>
										<div class="service-detail">
											<h3>Making memories</h3>
											<p>What's a journey without unique experiences,fun banter & Bonhomie?</p>
										</div>
										<div class="service-icon"><i class="fa fa-handshake-o"></i></div>
									</div><!-- Service Item -->
								</div><!-- Service Row-->
							</div><!-- Services Carousel -->
						</div>
					</div>
				</div>
			</div>
		</section><!-- Services Section -->
		<!----- animation map ----------->
		<?php require_once "animation_home.php"; ?>
		<!------ animation map ----------->

		
		<section>
			<div class="block gray lazy" style="background:url(images//resource/Tourism_Fashion_2.jpg) no-repeat scroll 0 0;">
				<div class="container">
					<div class="row">
						<div class="col-md-12 column">
							<div class="title">
								<span>Choose your Questerra Experience</span>
								<h2>What <span>interests You ?</span></h2>
								<p>Choose from our range of hand crafted experiences from Arts to Buisness; Music to History; Architecture to Fashion and more.</p>
							</div><!-- Title -->
							<div class="price-table">
								<div class="parallax"></div>
								<div class="row">
								
								
									<?php 
										$getPackage_detail = $homeObj->getPackageHome();
										foreach($getPackage_detail as $getPackage_detail_arr){
									?>
								
									<div class="col-md-3">
										<div class="table"  style="background-color:#ee4a93;">
											<span><img class="lazy" src="<?php echo $getPackage_detail_arr['icon_image'];?>" alt="" /></span>
											<i><?php echo $getPackage_detail_arr['package_title'];?></i>
											<h4><?php  $query=mysql_query("select * from packages_category where id='".$getPackage_detail_arr['pkg_cat_id']."'");
															$represent_this=mysql_fetch_array($query);
															echo $represent_this['packages_category_name']; 
											 ?></h4>
											<ul>
												<li><?php echo $getPackage_detail_arr['location1'];?></li>
												<li><?php echo $getPackage_detail_arr['location2'];?></li>
												<li><?php echo $getPackage_detail_arr['location3'];?></li>
											</ul>
											<i>Package starting from</i>
											<strong><span>$</span> <?php echo $getPackage_detail_arr['package_price'];?> <i>ONLY</i></strong>
											<a href="tours-details.php?id=<?php echo $getPackage_detail_arr['id'];?>" title="">BOOK NOW</a>
											
											<style>
												#tooltip1 { position: relative; }
												#tooltip1 a span { display: none; color: #FFFFFF; }
												#tooltip1 a:hover span { display: block; position: absolute; width: 250px; background: #ee4a93; margin-left: -15px; top: -5px; color: #FFFFFF; padding: 5px 5px; border-radius: 10px; border: 2px solid #ffc801; }
												@media only screen and (min-width: 410px) and (max-width:750px){#tooltip1{margin-left:15%;}}
												@media only screen and (min-width: 330px) and (max-width:400px){#tooltip1{margin-left:10%;}}
												@media only screen and (min-width: 765px) and (max-width:1024px){#tooltip1{margin-left:32%;}}
											</style>
											<p id="tooltip1" style="color: #fff; background-color: #5bc0de; padding: 10px 5px;font-size: 15px;line-height: 1.33;border-radius: 25px;font-weight: 400;text-align: center;vertical-align: middle;cursor: pointer; width:230px; left:20px;">
												<a href="#" style="color:#fff; font-family: arimo; font-size:15px; font-weight:300;">
													Check Available Dates
													<span>
														<?php 
															$data = $getPackage_detail_arr['pkg_date'];
															list($data1, $data2, $data3, $data4, $data5) = split('[,.-]', $data);
															echo "$data1<br>$data2<br>$data3<br>\n";
														?>
													</span>
												</a>
											</p>
										</div><!-- Table -->
									</div>
									<?php }
									?>
								
								</div>
							</div><!-- Price Table -->
						</div>
					</div>
				</div>
			</div>
		</section><!-- Price Table -->
		
		<section>
			<!--<div class="block remove-gap">-->
			<div class="blog">
				<div class="block" style="padding-top: 0px;">
					<div class="title">
						<span>Musings, perspectives & other chitter chatter</span>
						<h2> OUR <span> BLOG </span></h2>
						<p>Peek into the melting pot of perspectives, thoughts, issues, practices and experiences</p>
					</div><!-- Title -->

					<div class="controls">	
						<ul>
							<li class="filter" data-filter="all">All</li>
							<?php 
								$category = $homeObj->getCategory();
								foreach($category as $category_arr){
									?>
									
								<li class="filter" data-filter="<?php echo $category_arr['id']?>"><?php echo $category_arr['packages_category_name']?></li>
								
							<?php	}
							?>
						</ul>
					</div>
					<ul id="Grid" class="merged">
					
					<?php 
						$getBlog_detail = $homeObj->getBlog();
						foreach($getBlog_detail as $getBlog_detail_arr){
					?>
						<li class="mix col-md-2 <?php echo $getBlog_detail_arr['pkg_cat_id']?>" data-cat="1">
							<div class="portfolio">
								<img class="lazy" src="<?php echo $getBlog_detail_arr['blog_image'];?>" alt="" />
								<div class="overlay"><span></span></div>
								<div class="hover">
									<h4><?php echo $getBlog_detail_arr['blog_title'];?></h4>
									<span><a href="blog-details.php?id=<?php echo $getBlog_detail_arr['id']; ?>" title=""><i class="fa fa-eye"></i></a></span>
								</div>
							</div>
						</li>
						
						<?php }
						?>
					</ul>
				</div>
			</div>
		</section><!-- Portfolio -->

		<section>
			<div class="block blackish">
				<div style="background:url(images/parallax2.jpg);" class="parallax lazy"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12 column"  style="text-align:center;">
							<div class="title">
								<span>Postcards from our Travelers</span>
								<h2><span>Testimonials</span></h2>
							</div>
							<div class="testimonials-carousel">
								<?php 
									$getTestimonial_detail = $homeObj->getTestimonial();
									foreach($getTestimonial_detail as $getTestimonial_detail_arr){
								?>	
								
								<div class="testimonial" data-hash="<?php echo $getTestimonial_detail_arr['testimonials_name'];?>">
									<blockquote><i class="fa fa-quote-left"></i><?php echo $getTestimonial_detail_arr['testimonials_desc'];?><i class="fa fa-quote-right"></i></blockquote>
								</div><!-- Testimonial -->
								<?php	}
								
								?>
							</div><!-- Testimonials Carousel -->
							
							<div class="testimonial-selector">
								<div class="row">
									<?php 
										$getTestimonial_detail = $homeObj->getTestimonial();
										foreach($getTestimonial_detail as $getTestimonial_detail_arr){
									?>		
										<div class="col-md-4">
											<div class="client">
												<div class="client-img"><a href="#<?php echo $getTestimonial_detail_arr['testimonials_name'];?>"><img class="lazy" src="<?php echo $getTestimonial_detail_arr['testimonials_image'];?>" alt="" /></a></div>
												<h4><?php echo $getTestimonial_detail_arr['testimonials_name'];?></h4>
												<span><?php echo $getTestimonial_detail_arr['position'];?></span>
											</div><!-- Client -->
										</div>	
											
									<?php	}
									
									?>
									
								</div><br><br>
							</div><!-- Testimonial Selectors -->
							<a href="testimonials.php" class="btn btn-danger" role="button">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Testimonials -->
		
		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-12 column">
							<div class="title">
								<span>Not Media Shy</span>
								<h2>PRESS <span> & </span> MEDIA</h2>
								<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam um dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							</div><!-- Title -->
							<div class="team-carousel">
								<?php 
									 $getpress_media_detail = $homeObj->getpress_media();
									 foreach($getpress_media_detail as $getpress_media_detail_arr){ 
								 ?>
									<div class="member">
										<div class="member-img">
											<img class="lazy" src="<?php echo $getpress_media_detail_arr['press_media_image'];?>" alt="" />
										</div><!-- Member Image -->
										<div class="member-title">
											<a href="press_media-details.php?id=<?php echo $getpress_media_detail_arr['id']; ?>" title="<?php echo $getpress_media_detail_arr['press_media_title'];?>"><h4><?php echo $getpress_media_detail_arr['press_media_title'];?></h4></a>
											<span><?php echo $getpress_media_detail_arr['date_created'];?></span>
											
										</div>
									</div>
								<?php 
									} 
								?><!-- Member -->
							
							</div><!-- Team Carousel -->
						</div>
					</div>
				</div>
			</div>
		</section><!-- Team Carousel Section -->
		
		
		