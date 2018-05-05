<?php
	require_once "admin/clasess/package.class.php";
	$packageObj = new package();
	$category_arr =$packageObj->getCategory();
?>	
<?php
	require_once "admin/clasess/book.class.php";
	$bookObj = new book();
	if($_REQUEST['submit'] == "submit"){
		$bookObj->addbook($_REQUEST);
		?>
		
	<?php
	}



?>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php require_once "header.php"; ?>

		<section>
			<div class="block blackish">
				<div style="background:url(images/parallax1.jpg);" class="parallax"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="title2">
								<span>To plan and book your vacation!</span>
								<h2>Book<span>Now</span></h2>
							</div>
							<div class="tab-forms">
								
								<form class="form" method="post" action="#" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-4"><label>Name</label><input type="text" name="firstname" placeholder="Enter A Your First Name" /></div>
										
										<div class="col-md-4"><label>Last Name</label><input type="text" name="lastname" placeholder="Enter A Your Last Name" /></div>
										
										<div class="col-md-4"><label>Mobile Number</label><input type="text" name="mobile_number" maxlength="10" pattern="[0-9]{10}" placeholder="Enter A Your Mobile Number" /></div>
										
										<!--<div class="col-md-4"><label>Departure Date</label><input class="popupDatepicker" type="text" placeholder="mm/dd/yy" /></div>-->
										
										<div class="col-md-4"><label>Address</label><input type="text" name="address" placeholder="Enter A Your Address" /></div>
										
										<div class="col-md-4"><label>City</label><input type="text" name="city" placeholder="Enter A Your City" /></div>
										
										<div class="col-md-4"><label>State</label><input type="text" name="state" placeholder="Enter A Your State" /></div>
										
										<div class="col-md-4"><label>Zip</label><input type="text" name="zip" pattern="[0-9]{6}" placeholder="Enter A Your Zip Code" /></div>
										
										<div class="col-md-4"><label>Email</label><input type="email" name="email" placeholder="Enter A Your Email Id" /></div>
										<div style="position: relative;">
<div class="wmd-container">
<div id="wmd-button-bar" class="wmd-button-bar">
<ul id="wmd-button-row" class="wmd-button-row">
</div>
<textarea id="wmd-input" class="wmd-input" name="post-text" cols="92" rows="15" tabindex="101" data-min-length=""></textarea>
<grammarly-btn>
<div class="_e725ae-textarea_btn _e725ae-anonymous _e725ae-not_focused" style="z-index: 2; opacity: 1; transform: translate(629px, 224px);" data-grammarly-reactid=".0">
<div class="_e725ae-transform_wrap" data-grammarly-reactid=".0.0">
<div class="_e725ae-status" title="Protected by Grammarly" data-grammarly-reactid=".0.0.0"> </div>
</div>
<span class="_e725ae-btn_text" data-grammarly-reactid=".0.1">Not signed in</span>
</div>
</grammarly-btn>
</div>
</div>
										<div class="col-md-4">
											<label >Select Category</label>
											<select name="pkg_cat_id" style="border:1px solid #fff;">
												<option value="">Select category</option>
												<?php foreach ($category_arr as $category) { ?>
												<option value="<?php echo $category['id']?>"><?php echo $category['packages_category_name']?> </option>
												<?php } ?>
											</select>
										</div>
										<!--<div class="col-md-12">
											<table>
												<thead>
													<tr>
														<th width="350" style="color:#fff;text-align:center">Name</th>
														<th width="600" style="color:#fff;text-align:center">Address</th>
														<th width="250" style="color:#fff;text-align:center">Date Of Birth</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<span class="wpcf7-form-control-wrap name1">
															<input class="wpcf7-form-control wpcf7-text" name="name1" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" placeholder="1" type="text">
															</span>
														</td>
														<td>
															<span class="wpcf7-form-control-wrap address1">
															<input class="wpcf7-form-control wpcf7-text" name="address1" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" type="text">
															</span>
														</td>
														<td>
															<span class="wpcf7-form-control-wrap birthday1">
															<input class="wpcf7-form-control wpcf7-text" name="birthday1" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" type="text">
															</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="wpcf7-form-control-wrap name2">
															<input class="wpcf7-form-control wpcf7-text" name="name2" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" placeholder="2" type="text">
															</span>
														</td>
														<td>
															<span class="wpcf7-form-control-wrap address2">
															<input class="wpcf7-form-control wpcf7-text" name="address2" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" type="text">
															</span>
														</td>
														<td>
															<span class="wpcf7-form-control-wrap birthday2">
															<input class="wpcf7-form-control wpcf7-text" name="birthday2" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" type="text">
															</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="wpcf7-form-control-wrap name3">
															<input class="wpcf7-form-control wpcf7-text" name="name3" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" placeholder="3" type="text">
															</span>
														</td>
														<td>
															<span class="wpcf7-form-control-wrap address3">
															<input class="wpcf7-form-control wpcf7-text" name="address3" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" type="text">
															</span>
														</td>
														<td>
															<span class="wpcf7-form-control-wrap birthday3">
															<input class="wpcf7-form-control wpcf7-text" name="birthday3" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" type="text">
															</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="wpcf7-form-control-wrap name3">
															<input class="wpcf7-form-control wpcf7-text" name="name4" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" placeholder="4" type="text">
															</span>
														</td>
														<td>
															<span class="wpcf7-form-control-wrap address3">
															<input class="wpcf7-form-control wpcf7-text" name="address4" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" type="text">
															</span>
														</td>
														<td>
															<span class="wpcf7-form-control-wrap birthday3">
															<input class="wpcf7-form-control wpcf7-text" name="birthday4" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" type="text">
															</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="wpcf7-form-control-wrap name3">
															<input class="wpcf7-form-control wpcf7-text" name="name5" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" placeholder="5" type="text">
															</span>
														</td>
														<td>
															<span class="wpcf7-form-control-wrap address3">
															<input class="wpcf7-form-control wpcf7-text" name="address5" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" type="text">
															</span>
														</td>
														<td>
															<span class="wpcf7-form-control-wrap birthday3">
															<input class="wpcf7-form-control wpcf7-text" name="birthday5" value="" size="40" maxlength="250" minlength="3" aria-invalid="false" type="text">
															</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>-->
										<div class="col-md-12"><input type="submit" name="submit" id="submit" value="submit" /></div>
									</div>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php require_once "footer.php"; ?>