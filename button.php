<?php require_once "header.php";?>

	<div class="page-top"> 
		<div class="block blackish">
			<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
			<div class="container">
				<span>Book The Trip And Enjoy season</span>
				<h1>Win a Free <i> Experience</i></h1>
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
								<div class="col-md-12 column" style="padding-top:40px;">
									<h3>Competition Form</h3>
									<p>We are looking for creative professionals who we could reward with a free Questerra experience in exchange for their creativity</p>
									<div class="col-md-2 column"></div>
									<div class="col-md-6 column" style="padding: 0px 0;">
									
										<div class="jx-contact-form">
											<?php
												if(isset($_REQUEST['msg'])){
													if($_REQUEST['msg']="success"){
														$message="Thank you for applying at Questerra. We will get back to you in 7 working days.";
														$color="green";
													}elseif($_REQUEST['msg']="error"){
														$message="Oh Oh! Something went wrong! Please try again.";
														$color="red";
													}
												}
											?>
											<h5 style="color:<?php echo $color;?>; text-align:center;"><?php echo $message; ?></h5><br>
						
											<form action="php/mail.php" id="contactForm" method="post">
												<div class="row-1">
													<div class="contact-first-name">
														<input type="text" id="name" name="name" placeholder="Name" class="jx-form-text" data-validation="required" required/>
														<!-- First Name Textbox -->
													</div>
													<div class="contact-email">
														<input type="text" id="email" name="email" placeholder="Email Address" class="jx-form-text" data-validation="email" required/>
														<br>
														<!-- Email Name Textbox -->
													</div>
												</div>
												
												<div class="row-1">
													<div class="contact-subject">
														<input type="hidden" id="subject" value="form" name="subject" placeholder="Subject" class="jx-form-text" data-validation="required" required/>
														<!-- Subject Textbox -->
													</div>
												</div>
												
												<div class="contact-radio" style="border-bottom:1px solid">												
														<label>Which of the following do you think you could do for us?</label>
														<input type="radio" name="work" value="Photography"> Photography<br>
														<input type="radio" name="work" value="Videography"> Videography<br>
														<input type="radio" name="work" value="Blog"> Blog<br>
														<input type="radio" name="work" value="Social Media Influencing"> Social Media Influencing<br>
														<input type="radio" name="work" value="Others"> Others <br>
												</div>
													
												
												<div class="contact-data" style="padding-top:20px;">
														<input name="workexperience" type="text" placeholder="Please share the link of your work with respect to any of the above." required/>
												</div>	
												
												<div class="contact-first-name">
														<input type="text" id="name" name="crowd" placeholder="How would you be different in a crowd? (under 50 words)" class="jx-form-text" data-validation="required" required/>
														<!-- First Name Textbox -->
												</div>
													
													<div class="contact-message">
														<textarea id="message" name="questerra" class="jx-form-textarea" rows="5" cols="30" placeholder="What are your expectations from QUESTERRA? Describe in 500 words" data-validation="required" style="border-bottom:1px solid;" required></textarea>
														<!-- Message Box -->
													</div>
													
													<div class="contact-message">
														<textarea id="message" name="describe" class="jx-form-textarea" rows="5" cols="30" placeholder="Please describe (500 words)" data-validation="required" style="border-bottom:1px solid;" required></textarea>
														<!-- Message Box -->
													</div>
													
													<div class="contact-message">
														<textarea id="message" name="national" class="jx-form-textarea" rows="5" cols="30" placeholder="If you’ve been to India; Your experience" data-validation="required" style="border-bottom:1px solid;"></textarea>
														<p>OR</p>
														<textarea id="message" name="national1" class="jx-form-textarea" rows="5" cols="30" placeholder="If you have not been to India, Your expectation/understanding of India." data-validation="required" style="border-bottom:1px solid;"></textarea>
														<!-- Message Box -->
													</div>
													<div class="contact-message">
														<textarea id="message" name="describe1" class="jx-form-textarea" rows="5" cols="30" placeholder="How would you be able to assist QUESTERRA ?" data-validation="required" style="border-bottom:1px solid;" required></textarea>
														<!-- Message Box -->
													</div>
													<div class="contact-message">
														<textarea id="message" name="describe2" class="jx-form-textarea" rows="5" cols="30" placeholder="Tell us an achievement in your life that you're proud of. What did you learn from it? * (under 50 words)" data-validation="required" style="border-bottom:1px solid;" required></textarea>
														<!-- Message Box -->
													</div>
													<div class="contact-submit">
														<input type="submit" id="submit" name="submit" class="jx-submit" value="Send" />
														<!-- Submit Button -->
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
		</div>
	</section><!-- Details Page -->


<?php require_once "footer.php"; ?>