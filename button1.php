	<!----------------pop up start---------------------->
												<style>
												.black_overlay {
												  display: none;
												  position: absolute;
												  top: 0%;
												  left: 0%;
												  width: 100%;
												  height: 100%;
												  background-color: black;
												  z-index: 1001;
												  -moz-opacity: 0.8;
												  opacity: .10;
												  filter: alpha(opacity=80);
												}
												.white_content {
												  display: none;
												  position: absolute;
												  top: 25%;
												  left: 110%;
												  width: 175%;
												  height: 50%;
												  padding: 16px;
												  border: 3px solid #ee4a93;
												  background-color: white;
												  z-index: 1002;
												  overflow: auto;
												}
												
												@media screen and (min-width:320px) and (max-width:650px) {
													.white_content {
												  
												  top: 55%;
												  left: 0%;
												  width: 110%;
												  
												}
												}
												</style>
												
												<p>This is the main content. To display a lightbox click <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"> <input type="button" class="button_ style-1 hero" value="Detailed Itinerary" title="" style="background-color:#ee4a93;padding-bottom:40px;"></a></p>
												
												<div id="light" class="white_content" style="height: 437px; top: 40px;">
												<a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'" style="font-size:25px; color:red; float:right;">X</a>
												<?php echo $package_detail['desc1']; ?>
													<a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><input type="button" value="close" style="background-color:#d98839;"></a>
												</div>
												<!------------ popup end ---------------->
													