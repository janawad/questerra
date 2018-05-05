<?php
	require_once "clasess/about.class.php";
	$aboutObj = new about();
	
	if($_REQUEST['submit'] == "Update"){
		
		$aboutObj->Updateabout$_REQUEST);
		
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=about/list-about'; </script>";
		
	}
	
	//Get Detials by id
	if(isset($_REQUEST['about_id'])){
		$about_arr = $aboutObj->getaboutByID($_REQUEST['about_id']);
		extract($about_arr);
	}
	
	
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Course Name"> about Title </label>
							<input name="about_title" id="about_title" type="text" class="form-control" value="<?php echo $about_title; ?>" required>
						</div>
						<div class="form-group">
							<label for="about Description">about Description</label>
							<textarea name="about_desc" id="about_desc" class="form-control" style="height: 120px;" required><?php echo $about_desc; ?></textarea>
						</div>
						
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="submit" value="Update" class="btn btn-success">
					</div>
				</form>
			</div>
			  <!-- /.box -->
		</div>
	</div>