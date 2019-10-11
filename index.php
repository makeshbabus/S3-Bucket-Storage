<?php 
include('header.php');
?>
<title>phpzag.com : Demo Amazon S3 File Upload using JavaScript</title>
<script src="https://sdk.amazonaws.com/js/aws-sdk-2.1.24.min.js"></script>
<script src="aws_config.js"></script>
<script src="s3_upload.js"></script>
<?php include('container.php');?>
<div class="container">	
	<h2>Amazon S3 File Upload using JavaScript</h2>	
	<br>		
	<form id="uploadForm" method='post' enctype="multipart/form-data">
		<h3>Upload File</h3><br/>
		<span id="showMessage" style="display:none;color:red;">File uploaded to Amazon server.</span>	
		<input type='file' name="upFile" id="upFile" required="" /> 
		<br>
		<input type='submit' value='Upload'/>	
	</form>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/amazon-s3-file-upload-using-javascript">Back to Tutorial</a>		
	</div>	
</div>
<?php include('footer.php');?>
