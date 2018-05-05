	<!--Successfully about Add-->
	<div class="modal fade" id="add-about-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;about Added Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully about Updated-->
	<div class="modal fade" id="Update-about-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;about Updated Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully about Deleted-->
	<div class="modal fade" id="Deleted-about-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;about Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/about.class.php";
		$about = new about();
	 
		//Add and Edit form
		if($_REQUEST['submit']=="addform"){
			if($_REQUEST['url']=="insert"){
			 $result = $about->Addabout($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#add-about-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=about/list-about'  }, 1000);
					</script> <?php
				}
			}else{
				$result = $about->Updateabout($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#Update-about-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=about/list-about'  }, 1000);
					</script> <?php
				}
			}
		}
	 
		//Delete form
		$deleted1 = "Deleted_";
		$deleted2 = $_REQUEST['about_id'];
		$result = $deleted1.$deleted2;
		if($_REQUEST['submit_id']==$result){
		$result = $about->Deleteblog($_REQUEST['about_id']);
			if($result==1){?>
				<script>
					$("#Deleted-about-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=about/list-about'  }, 1000);
				</script> <?php
			}
		}
	 
		//listing about detials
		$about_arr = $about->getabout();
	 
	?>
	
	
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!-----Add new blogs---------->
							<a href='index.php?page=about/add-about' class="btn btn-primary">Add New Blogs</a></br></br>
						<!--------new blogs --------->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Title</th>
									<th>Description</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($about_arr as $about){ ?>
									<tr>
										<td>
											<?php echo $about['about_title'];?>
										</td>
										<td>
											<?php echo $about['about_desc'];?>
										</td>
										<td>
											<?php echo $about['date_created'];?>
										</td>
										<td>
											<?php echo $about['date_updated'];?>
										</td>
										<td>
											<a href="index.php?page=about/edit-about&about_id=<?php echo $about['id']; ?>" class="btn bg-green mbottom20">edit</a>
										</td>
										<td>
											<form method="post" id="form_delete_<?php echo $about['id'];?>" name="form_delete_<?php echo $about['id'];?>">
												<input type="hidden" name="about_id" id="about_id" value="<?php echo $about['id'];?>">
												<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $about['id'];?>">
												<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $about['id'];?>);">Delete</a>
											</form>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Title</th>
									<th>Description</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
	
	<script>
		$(function () {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"order": [[ 5, "desc" ]]
			});
		});
	</script>
	