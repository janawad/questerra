<?php
	require_once "clasess/about.class.php";
	$aboutObj = new about();
	if($_REQUEST['submit'] == "Submit"){
  
		$aboutObj->addabout($_REQUEST);
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=about/list-about'; </script>";
	}
	 $category_arr =$aboutObj->getCategory();
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<!--<div class="box-header with-border">
					<h3 class="box-title">Add New Blog</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="title">about Title</label>
							<input name="about_title" id="about_title" class="form-control" placeholder="Enter Title..." required>
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label for="Description">about Description</label>
							<textarea name="about_desc" id="about_desc" class="form-control" placeholder="Enter Description..." style="height: 120px;" required></textarea>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
					</div>
				</form>
			</div>
			  <!-- /.box -->
		</div>
	</div>