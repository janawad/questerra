<?php
	require_once "clasess/package.class.php";
	$packageObj = new package();
	$category_arr =$packageObj->getCategory();
?>
<div class="box box-primary">
 <form role="form" method="post" enctype="multipart/form-data">
 
 <div class="box-body">
						<div class="form-group col-md-3">
 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<textarea name="comment" form="usrform" class="ckeditor">Enter text here...</textarea>
</div>
</div> 

<form></div>