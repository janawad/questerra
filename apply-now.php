<?php require_once "header.php";?>
	<?php
	require_once "admin/clasess/applynow.class.php";
	$applynowObj = new applynow();
	if($_REQUEST['submit'] == "Contact Now"){
		$applynowObj->addApplynow($_REQUEST);
		?>
		<script type="text/javascript">
         <!--
            alert ("Thank you for contacting us, We will get back to you soon!");
         //-->
		</script>
	
	<?php
	}
	?>
	<!---- css ---->
	<style>
		p{
			text-align:justify;
		}
		h3 {font-size:18px;}
	</style>
	<!---- css end ---->
	
	<div class="page-top"> 
		<div class="block blackish">
			<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
			<div class="container">
				<span>Book The Trip And Enjoy season</span>
				<h1>APPLY <i>NOW</i></h1>
			</div>
		</div>
	</div><!-- Page Top -->	
		
		
	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-12 column">
						<div class="detail-page">
							<div class="row">
								<!--<div class="col-md-8 column">
									<div class="detail-img">
										<img src="images/resource/detail-page-img.jpg" alt="" />
									</div>
								</div>
								<div class="col-md-4 column">
									<div class="imp-details">
										<h3>Seattle, LA, Vegas</h3>
										<p>Eget sagittis justo orci faucibus platea consectetur hac imperdiet mi risus fames sapien rhoncus mattis posuere</p>
										<ul>
											<li><strong>DURATION:</strong><span>08 Aug 2013 - 16 Aug 2013</span></li>
											<li><strong>LOCATION:</strong><span>USA</span></li>
											<li><strong>AVAILABLE SEAT:</strong><span>98</span></li>
											<li><strong>PRICE:</strong><span>$ 7,000</span></li>
										</ul>
										<a href="#" title="">BOOK NOW</a>
									</div>
								</div>-->
								
								<div class="col-md-12 column">
									
									
									<div class="col-md-2 column"></div>
									<div class="col-md-6 column" style="padding: 50px 0;">
									<h3>You are ready for your Questerra experience!</h3>
									<p style="color:#ffc801;text-align:center;">For more information</p>
										
									<form  class="contact" method="post" action="#" enctype="multipart/form-data">
												<div class="row-1">
													<div class="contact-first-name">
														<input type="text" id="name" name="name" placeholder="Name" class="jx-form-text" data-validation="required" required/>
														<!-- First Name Textbox -->
													</div>
													
													<div class="contact-radio" style="border-bottom:1px solid">												
														<label>gender</label><input type="radio" name="gender" value="male"> Male<br>
														<input type="radio" name="gender" value="female"> Female<br>
													</div>

													<div class="contact-date">
														<input class="popupDatepicker" name="dob" type="text" placeholder="Date of birth" required/>
													</div>
													
													<div class="contact-email">
														<input type="text" id="email" name="email" placeholder="Email Address" class="jx-form-text" data-validation="email" required/>
														<br>
														<!-- Email Name Textbox -->
													</div>
													
													<div class="contact-date">
														<input name="nationality" type="text" placeholder="Nationality" required/>
													</div>
													
													<div class="contact-date">
														<input name="number" type="text" placeholder="Phone Number" required/>
													</div>
													
													<div class="contact-message">
														<textarea id="message" name="education" class="jx-form-textarea" rows="5" cols="30" placeholder="Educational Qualification" data-validation="required" style="border-bottom:1px solid;" required></textarea>
														<!-- Message Box -->
													</div>
													
													<div class="contact-message">
														<textarea id="message" name="role" class="jx-form-textarea" rows="5" cols="30" placeholder="Current/Last Professional Role" data-validation="required" style="border-bottom:1px solid;" required></textarea>
														<!-- Message Box -->
													</div>
													
													<div class="contact-message">
														<textarea id="message" name="domain" class="jx-form-textarea" rows="5" cols="30" placeholder="What domain are you looking for" data-validation="required" style="border-bottom:1px solid;" required></textarea>
														<!-- Message Box -->
													</div>
													
												</div>
												
												<h2 style="padding:25px 0;">General Questions</h2>
												
												<div class="contact-radio" style="border-bottom:1px solid">		
													<label>Have you ever been to India before? </label>
													<input type="radio" name="gender" value="yes"> YES<br>
													<input type="radio" name="gender" value="no"> NO<br>
												</div>
												
												<div class="row-1">
													<div class="contact-message">
														<textarea id="message" name="message" class="jx-form-textarea" rows="5" cols="30" placeholder="What excites you about your Domain?" data-validation="required" style="border-bottom:1px solid;" required></textarea>
														<!-- Message Box -->
													</div>

													<div class="contact-message">
														<textarea id="message" name="message1" class="jx-form-textarea" rows="5" cols="30" placeholder="5 experiences of a tour that make a good tour even better for you" data-validation="required" style="border-bottom:1px solid;" required></textarea>
														<!-- Message Box -->
													</div>
													
													<div class="contact-message">
														<textarea id="message" name="message2" class="jx-form-textarea" rows="5" cols="30" placeholder="5 experiences of a tour that make a good tour even better for you" data-validation="required" style="border-bottom:1px solid;" required></textarea>
														<!-- Message Box -->
													</div>
													
													<div class="contact-submit">
														<input type="submit" id="submit" name="submit" class="jx-submit" value="Contact Now" />
														<!-- Submit Button -->
													</div>
												</div> 
											</form>
									
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Details Page -->

	<?php require_once "footer.php";?> 
