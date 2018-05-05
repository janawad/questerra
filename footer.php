<?php
	require_once "admin/clasess/enquiry.class.php";
	$enquiryObj = new enquiry();
	if($_REQUEST['submit'] == "Contact Now"){
		$enquiryObj->addEnquiry($_REQUEST);
		?>
		<script type="text/javascript">
         <!--
            alert ("Thank you for contacting us, We will get back to you soon!");
         //-->
		</script>
	
	<?php
	}?>
	
	<!--- Newslitter Subscribe --->
	<?php
	require_once "admin/clasess/newsletter.class.php";
	$newsletterObj = new newsletter();
	if($_REQUEST['submit'] == "Subscribe"){
		$newsletterObj->addnewsletter($_REQUEST);
		?>
		<script type="text/javascript">
         <!--
            alert ("Thank you, We will get back to you soon!");
         //-->
		</script>
	
	<?php
	}
	?>
	<!--- Newslitter Subscribe --->
<style>
input[type="email"]::-webkit-input-placeholder {
  color: #fff;
}
.nav > li > a {
padding:3px; 20px;
}
option{background:#000;}
</style>

<footer>
		<div class="footer">
			<div class="footer-block">
				<div class="container">
					<div class="row">
						<h3>CONTACT <span>US </span></h3>
						<div class="col-md-1 column">
							<div class="contact-info">
							</div>
						</div>
						<div class="col-md-3 column" style="margin-bottom:0px;">
							<div class="contact-info"><br>
								<h6 style="color:#fff;"><strong>Corporate Office</strong></h6>
								<p style="font-family: arimo;font-size: 13px;line-height: 20px;transition: all 0.2s linear 0s;"><strong>D-02, K/L block, <br>Golden orchid, <br>Lavelle/Kasturba road, 10/8, <br>Bangalore, 560001<br>PH: +91 80 4168 8099</strong></p><hr><br>
								
								<h6 style="color:#fff;"><strong>Address for USA</strong></h6>
								<p style="font-family: arimo;font-size: 13px;line-height: 20px;transition: all 0.2s linear 0s;"><strong>180 Bayberry lane, Watchung,<br> NJ07069<br> Ph +6463846387</strong></p>
								
							</div>
						</div>
						<div class="col-md-8 column">
							<div id="message"></div>
							<form  class="contact" method="post" action="#" enctype="multipart/form-data">
								<div class="col-md-4 column">
									<input name="name" type="text" id="name" placeholder="Name" style="border:1px solid;padding-left: 25px;color:#fff;" required/>
									<input  name="email" type="email" id="email"  placeholder="Email" style="border:1px solid;padding-left: 25px;color:#fff;" required/>
									<input  name="phone" type="text" maxlength="10"  pattern="[0-9]{10}" id="phone"  placeholder="Phone no." style="border:1px solid;padding-left: 25px;color:#fff;" required/>
									<select name="country" style="color:#fff;border:1px solid #fff;padding-left: 25px;" required>
										<option value="">Select country</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antartica">Antarctica</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
										<option value="Brunei Darussalam">Brunei Darussalam</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos Islands">Cocos (Keeling) Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Congo">Congo, the Democratic Republic of the</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cota D'Ivoire">Cote d'Ivoire</option>
										<option value="Croatia">Croatia (Hrvatska)</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="France Metropolitan">France, Metropolitan</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Territories">French Southern Territories</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
										<option value="Holy See">Holy See (Vatican City State)</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran">Iran (Islamic Republic of)</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
										<option value="Korea">Korea, Republic of</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Lao">Lao People's Democratic Republic</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macau">Macau</option>
										<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia">Micronesia, Federated States of</option>
										<option value="Moldova">Moldova, Republic of</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Northern Mariana Islands">Northern Mariana Islands</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Pitcairn">Pitcairn</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russia">Russian Federation</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
										<option value="Saint LUCIA">Saint LUCIA</option>
										<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia (Slovak Republic)</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
										<option value="Span">Spain</option>
										<option value="SriLanka">Sri Lanka</option>
										<option value="St. Helena">St. Helena</option>
										<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syria">Syrian Arab Republic</option>
										<option value="Taiwan">Taiwan, Province of China</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania, United Republic of</option>
										<option value="Thailand">Thailand</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks and Caicos">Turks and Caicos Islands</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Viet Nam</option>
										<option value="Virgin Islands (British)">Virgin Islands (British)</option>
										<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
										<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Yugoslavia">Yugoslavia</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
								</div>
								<div class="col-md-4 column">
									<textarea name="message" id="" rows="3"  placeholder="Details"style="padding-left: 25px;color:#fff;" required></textarea>
									<input type="submit" name="submit" id="submit" value="Contact Now" />
								</div>
							</form><!-- Contact Form -->				
						</div>
						<div class="social" style="margin-left: 32px;">
							<h5>Find Us On</h5>
							<a href="https://www.facebook.com/questerra/" target="_blank" title=""><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/questerra_co" target="_blank" title=""><i class="fa fa-twitter"></i></a>
							<a href="https://in.pinterest.com/questerra/" target="_blank" title=""><i class="fa fa-pinterest"></i></a>
							<a href="https://www.instagram.com/questerra.co" target="_blank" title=""><i class="fa fa-instagram"></i></a>
							<a href="https://www.youtube.com/channel/UCuMZi3PTXLcZmNyY46_geiQ" target="_blank" title=""><i class="fa fa-youtube"></i></a>
							<a href="https://www.tumblr.com/blog/questerraco" target="_blank" title=""><i class="fa fa-tumblr"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		</footer><!-- Footer -->
		<div class="bottom-footer">
			<!-- footer menus--->
			<style>
			@media screen and (min-device-width: 800px) and (max-device-width: 1920px) {
			.col-lg-12{height:90px;left:185px;}
			.Abc{color:#ee4a93;left:-200px;padding-left: 0px; padding-right: 0px;}
			.cd{color:#ee4a93; left:-50px;padding-left: 0px; padding-right: 0px;}
			.ef{color:#ee4a93;left:-50px;padding-left: 0px; padding-right: 0px;width:100px;}
			.hg{color:#ee4a93;left:-147px;padding-left: 0px; padding-right: 0px;}
			.kl{color:#ee4a93;left:-135px;padding-left: 0px; padding-right: 0px;width:100px;}
			.zx{color:#ee4a93;left:-180px;padding-left: 0px; padding-right: 0px;}
			.rj{color:#ee4a93;left:-325px;padding-left: 0px; padding-right: 0px;}
			.Aj{color:#ee4a93;left:-255px;padding-left: 0px; padding-right: 0px;}}</style>
			<div class="container text-center">
				<div class="row">
					<div class="col-lg-12">
						<div class="col-md-2" style="padding-left:0px;padding-right:0px;">
							<ul>
							  <li><a href="booking-conditions.php" class="cd"> Booking Conditions</a></li>
							  <li><a href="#" class="Abc">Order E-brochure</a></li>
							</ul>
						</div>
						<div class="col-md-2" style="padding-left:0px;padding-right:0px;">
							<ul>
							  <li><a href="travel.php" class="ef">Travel Tips</a></li>
							  <li><a href="questerra-cares.php" class="hg">Questerra Cares</a></li>
							</ul>
						</div>
						<div class="col-md-2" style="padding-left:0px;padding-right:0px;">
							<ul>
							  <li><a href="faq.php" class="kl">FAQ</a></li>
							  <li><a href="affiliations-partnerships.php" class="zx">Affliate Program</a></li>
							</ul>
						</div>
						
						<!---- Newsletter css---->
						<style>
							/* The Modal (background) */
							.modal {
								display: none; /* Hidden by default */
								position: fixed; /* Stay in place */
								z-index: 1; /* Sit on top */
								padding-top: 100px; /* Location of the box */
								left: 0;
								top: 0;
								width: 100%; /* Full width */
								height: 100%; /* Full height */
								overflow: auto; /* Enable scroll if needed */
								background-color: rgb(0,0,0); /* Fallback color */
								background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
							}

							/* Modal Content */
							.modal-content {
								background-color: #fefefe;
								margin: auto;
								padding: 20px;
								border: 1px solid #888;
								width: 30%;
							}

							/* The Close Button */
							.close {
								color: #aaaaaa;
								float: right;
								font-size: 28px;
								font-weight: bold;
							}

							.close:hover,
							.close:focus {
								color: #000;
								text-decoration: none;
								cursor: pointer;
							}
						</style>
						
						<div class="col-md-2" style="padding-left:0px;padding-right:0px;">
							<ul>
							  <li><a href="packing.php" class="Aj">Packing List</a></li>
							  <li><a class="rj" id="myBtn" style="cursor:pointer;">Subscribe newsletter</button></li>
							</ul>
							<div id="myModal" class="modal">

							  <!-- Modal content -->
								<div class="modal-content">
									<span class="close">&times;</span>
									<p style="text-align:center;">Subscribe to Questerra</p>
									<form  class="news" method="post" action="#" enctype="multipart/form-data">
										<div class="form-group">
											<input name="name" type="text" class="form-control" placeholder="Name" required/>
										</div>
										<div class="form-group">
											<input name="email" type="text" class="form-control" placeholder="Email" required/>
										</div>
										<input type="submit" name="submit" id="submit" value="Subscribe" />
									</form>
								</div>

							</div>
						</div>
						
						<!--newsletter --->
							<script>
							// Get the modal
							var modal = document.getElementById('myModal');

							// Get the button that opens the modal
							var btn = document.getElementById("myBtn");

							// Get the <span> element that closes the modal
							var span = document.getElementsByClassName("close")[0];

							// When the user clicks the button, open the modal 
							btn.onclick = function() {
								modal.style.display = "block";
							}

							// When the user clicks on <span> (x), close the modal
							span.onclick = function() {
								modal.style.display = "none";
							}

							// When the user clicks anywhere outside of the modal, close it
							window.onclick = function(event) {
								if (event.target == modal) {
									modal.style.display = "none";
								}
							}
							</script>
						<!--news letter--->	
						  
					</div>
				</div>
			</div>
			<!---footer menus ends --->
			
			<div class="container">
				<p>QUESTERRA - Copyright 2017. Developed by <a href="http://macle.co.in/" title="" target="__black">Macle Grafics Pvt.Ltd</a></p>
			</div>
		</div>


		<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>

		<script type="text/javascript" src="js/jquery2.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/prettyPhoto.js"></script>
		<script type="text/javascript" src="js/jquery-plugin.min.js"></script>
		<script type="text/javascript" src="js/jquery.datepick.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>

		<!-- SLIDER REVOLUTION -->
		<script type="text/javascript" src="js/revolution/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js"></script>
		
		<!----LAZY LOADING------->
		<script type="text/javascript" src="js/jquery.lazyload.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(function() {
				$("img.lazy").lazyload();
			});
		</script>
		<!-----END----------->

		  <script>
		$(function() {
			$('.popupDatepicker').datepick();
			$('#inlineDatepicker').datepick({onSelect: showDate});
		});

		function showDate(date) {
			alert('The date chosen is ' + date);
		}

		$(document).ready(function() {

		/* =============== Revolution Slider ===================== */
		var revapi;
		revapi = jQuery('.tp-banner').revolution(
		{
			delay:9000,
			startwidth:1170,
			startheight:750,
			hideThumbs:10,
			fullWidth:"on",
			forceFullWidth:"off"
		});


		$(function(){
			$('#Grid').mixitup({
			effects: ['fade','scale'],
			transitionSpeed: 600,
			layoutMode: 'list',
			});
		});


		/* =============== Services Carousel ===================== */
		$('.services-carousel').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed : 1000,
		singleItem: true,
		autoplay: true,
		autoplayTimeout: 3000,
		dots: true,
		center: true,
		margin: 0,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		});


		/* =============== Services Carousel ===================== */
		$('.testimonials-carousel').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed : 1000,
		singleItem: true,
		autoplay: false,
		dots: false,
		center: true,
		margin: 0,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		URLhashListener:true,
		startPosition: 'URLHash'});


		/* =============== Team Carousel ===================== */
		$('.team-carousel').owlCarousel({
		items: 3,
		loop: true,
		smartSpeed : 1000,
		autoplay: true,
		autoplayTimeout: 3000,
		dots: false,
		margin: 30,
		autoplayHoverPause: true,
		responsive : {
			1000:{items:3},
			767:{items:2},
			468:{items:2},
			0:{items:1},
		}
		});


		/* =============== Tips Carousel ===================== */
		$('.tips').owlCarousel({
		items: 2,
		loop: true,
		smartSpeed : 1000,
		autoplay: true,
		autoplayTimeout: 3000,
		dots: false,
		margin: 30,
		autoplayHoverPause: true,
		responsive : {
			1000:{items:2},
			767:{items:2},
			468:{items:2},
			0:{items:1},
		}
		});

		/* =============== Fun Facts Counter ===================== */
		$(".counter").counterUp({
			time: 5000
		});

		});
		</script>
		
		

	</body>
</html>