	<script type="text/javascript" src="http://www.suryawoods.com/js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="http://www.suryawoods.com/js/jssor.slider.mini.js"></script>		
	<script>
        jQuery(document).ready(function ($) {            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:1.3,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1800,x:1,y:0.2,$Delay:30,$Cols:10,$Rows:5,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Outside:true,$Round:{$Top:1.3}},
              {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,y:-1,$Cols:12,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12}},
              {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
              {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
		.banner-1
		{
			//background: url("readyslider/img/back.png");
			background:#f2f1f1;
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
			//height:550px;			
		}
        
        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 {
            position: absolute;
        }
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            /* size of bullet elment */
            width: 50%;
            height: 100%;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            //cursor: pointer;
			border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 50%;
            height: 100%;
           
            //background: url('images/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }		
    </style>
	
	
	
	
	<style>
	.left { 	
 	cursor: url("http://www.suryawoods.com/images/left-arrow_02.png"), none;
		}
		.right { 	
 	cursor: url("http://www.suryawoods.com/images/right-arrow_02.png"), none;
		}
		@media only screen and (min-width:320px) and (max-width:1024px)
		{
		.img-padd-botm
			{
				padding-bottom:35px;
			}
		}
		@media only screen and (min-width:320px) and (max-width:640px)
		{
		.left { 	
			cursor: pointer;
		}
		.right { 	
 	cursor: pointer;
		}
		}
		
		.photo h4 {
    text-align: center;
    color: #7c0405;
    text-transform: uppercase;
	}
	.slider3a
	{
	padding-top:25px;
	padding-bottom:25px;
	}
	.carousel-inner > .active
	{
	background:white;
	}
	.carousel-inner p
	{
	text-align: center;
    color: #7c0405;
    text-transform: uppercase;
	font-weight:700;
	font-size:18px;
	}
	@media only screen and (min-width:320px) and (max-width:640px)
		{
	.photo h4 {
    text-align: center;
    color: #7c0405;
    text-transform: uppercase;
    font-size: 10px;
	}
	}
	@media only screen and (min-width:768px) and (max-width:991px)
		{
		.ih-item.square
		{
		width: 223px;
		height: 148px;
		}
		}
		.sll{
			height: 760px;
			width: 1170px;
		}
		.center-block{
			height:760px;
			 width: 1170px;
		}
		@media only screen and (min-width:360px) and (max-width:750px){
			.sll{
			height: 60%;
			 max-width:59%;
			 margin-left:20%;
			}
		}
		
		
	</style>
	
	<div id="boxes">
		<div id="dialog" class="window" style="position:fixed;">
			
			<link href="slide/css/bootstrap.min.css" rel="stylesheet">
			<link href="slide/css/full-slider.css" rel="stylesheet">
			<!--<a href="#" class="close" style="font-size:50px;float:left;">X</a>--><!------- close button ---->
			<header id="myCarousel" class="carousel slide" style="display:block!important;">
								
				<!-- Indicators -->
				<!--<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>-->
			
				<!-- Wrapper for Slides -->
				<div class="carousel-inner">
					<div class="center-block" id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; overflow: hidden; visibility: hidden;">
									<!-- Loading Screen -->
						<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
							<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 960px; height: 100%;"></div>
							<div style="position:absolute;display:block;background:url('readyslider/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
						</div>
						<div class="sll" data-u="slides" style="position: relative; top: 0px; left: 0px; overflow: hidden;border:2px solid #ee4a93;">
							<div data-p="112.50" style="display: none;" >
								<img data-u="image" src="images/slider/slide1.jpg" />
							</div>
							<div data-p="112.50" style="display: none;" >
								<img data-u="image" src="images/slider/slide2.jpg" />
							</div>					
							<div data-p="112.50" style="display: none;" >
								<img data-u="image" src="images/slider/slide3.jpg" />
							</div>	
										
						</div>
						<!-- Bullet Navigator -->
						<div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
							<div data-u="prototype" style="width:12px;height:12px;"></div>
						</div>
						<!-- Arrow Navigator -->
						<div class="abc">
						<span data-u="arrowleft" class="jssora05l left" style="margin-top:-1%!important;left:8px;width:50%;height:100%;" data-autocenter="2"></span>
						</div>
						<span data-u="arrowright" class="jssora05r right" style="margin-top:-22%!important;right:8px;width:50%;height:100%;" data-autocenter="2"></span>
						<!-- <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a> -->
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					
				</a>

			</header>
			<script src="slide/js/jquery.js"></script>

			<!-- Bootstrap Core JavaScript -->
			<script src="slide/js/bootstrap.min.js"></script>

			<!-- Script to Activate the Carousel -->
			<script>
			$('.carousel').carousel({
				interval: 10000 //changes the speed
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
		$('#mask').fadeTo("slow",0.7);	
			
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
	
		
	<!---- SLIDERS -------->
		<div class="slider">
			<div class="tp-banner-container">
				<div class="tp-banner blackish">
					<ul>	
						<li data-transition="fadetotopfadefrombottom" data-slotamount="10" data-masterspeed="1000" >
							
							<img class="lazy" src="images/resource/slider.jpg"  alt="slidebg3" data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat">
							
							<!---- PLANE SLIDER ---->
							<!---<div class="tp-caption sfr" data-x="800" data-y="150" data-speed="2000" data-start="3000" data-easing="Back.easeOut" data-captionhidden="on">
								<img  src="images/plane.png" alt="" />
							</div>-->
							
							<div class="tp-caption sfb slide1-subtitle" data-x="center" data-y="240" data-speed="2000" data-start="1000" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:16px;letter-spacing:16px; color:#4B4479;">Inspiring Occupational journey's</div>
							
							<div class="tp-caption sft slide1-title" data-x="center" data-y="290" data-speed="2000" data-start="1200" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:50px; padding:40px 100px;">Explore. <span>Learn.</span> Grasp. <span>Adapt</span></div>
							
							<div class="tp-caption sft slide1-title" data-x="center" data-y="440" data-speed="2000" data-start="1300" data-easing="Back.easeOut" data-captionhidden="on" style="text-align:center; padding:0px 15px;">Hand crafted domain specific tours for professionals and passionates, <br>with elements of insightful learning, building camaraderie, <br>entertainment and solid networking;</div>
						
							<!--<div class="tp-caption sf Inspiring Occupational t slide1-button" data-x="center" data-y="540" data-speed="2000" data-start="1600" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:13px;padding:5px 40px;">Read More</div>-->
						</li><!-- Slide 1 -->

						<li data-transition="zoomout" data-slotamount="10" data-masterspeed="1000">
							<img class="lazy" src="images/resource/slider2.jpg"  alt="slidebg3"  data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat">
							
							<div class="tp-caption sfl slide2-subtitle" data-x="0" data-y="240" data-speed="2000" data-start="1000" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:16px;">Inspiring Occupational journey's</div>
							
							<div class="tp-caption sfl line" data-x="0" data-y="280" data-speed="2000" data-start="1400" data-easing="Back.easeOut" data-captionhidden="on" style="width:104px; height:2px; background:#e74c3c;"></div>
							
							<div class="tp-caption sfl slide2-title" data-x="0" data-y="320" data-speed="2000" data-start="1800" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:72px; letter-spacing:10px;">Explore. Learn. </div>
							
							<div class="tp-caption sfl slide2-subtite2" data-x="0" data-y="400" data-speed="2000" data-start="2200" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:48px; letter-spacing:3px;">Grasp. Adapt</div>
							
							<div class="tp-caption sfb slide2-title" data-x="0" data-y="460" data-speed="2000" data-start="2600" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:20px;">Hand crafted domain specific tours for professionals and passionates, <br>with elements of insightful learning, building camaraderie,<br> entertainment and solid networking;   </div>
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
											<p>Adding plethoric perspectives to your thoughts</p>
										</div>
										<div class="service-icon"><i class="fa fa-handshake-o"></i></div>
									</div><!-- Service Item -->
									<div class="service item2">
										<div class="service-img">
											<img class="lazy" src="images/resource/2.jpg" alt="" />
										</div>
										<div class="service-detail">
											<h3>Lasting networks</h3>
											<p>Making friends around the world who share the same interests/profession</p>
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
											<!--<strong><span>$</span> <?php echo $getPackage_detail_arr['package_price'];?> <i>ONLY</i></strong>-->
											<a href="tours-details.php?id=<?php echo $getPackage_detail_arr['id'];?>" title="">MORE DETAILS</a>
											
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
							<a href="blogs.php" class="btn btn-danger" role="button">Read More</a>
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
								<p>See What the Media has to say about us</p>
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
		
		
		<!-------------foooter style---------------->
		<style>
		.bottom-footer{margin-top: -50px;}
		</style>
		
		