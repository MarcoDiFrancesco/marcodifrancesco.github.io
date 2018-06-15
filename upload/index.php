<!DOCTYPE html>
<html>
	<head>
		<style>
		td {
			padding: 10px;
		}
		tr {
			border-bottom: 1px solid lightgray;
		}
		table {
			border-collapse: collapse;
		}
		</style>
		<title>Upload files</title>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$('[onload]').ready(function(){ // onload of the page update table
				$.ajax({
					type:"POST",
					url: "search.php",
					data:{
						'searchInput':''
					},
					success: function(result){
		        $("#searchOutput").html(result);
		    	}
				});
			});

			$("#searchFiles").keyup(function(){ // when there is an input update table
				value = $(this).val();
		    $.ajax({
					type:"POST",
					url: "search.php",
					data:{
						'searchInput':value
					},
					success: function(result){
		        $("#searchOutput").html(result);
		    	}
				});
			});
		});
		</script>


	</head>
	<body>
		<div style="float: left; margin-left: 20px; margin-right: 20px;">
			<h1 style="-webkit-margin-before:0px;">Upload your files</h1>
			<form method="post" action="postUpload.php" enctype="multipart/form-data">
				<p><input type="file" name="fileToUpload" id="fileToUpload"></p>
				<h3>Max size: 100MB</h3>
				<p><input type="submit" name="submit" value="Upload file" style="width: 200px; height: 50px;"></p>
			</form>
			<form method="post" action="linkUpload.php" enctype="multipart/form-data">
				<br>
				<h1>Upload Google Drive files</h1>
				<h3>Still not working</h3>
				<input type="text" name="linkToUpload" value="https://www.marcodifrancesco.com/upload/uploads/UNIPD%20Scienze%20.pdf" style="margin-right: 10px; width: 200px;">
				<input type="submit" name="submit" value="Upload from link" disabled="yes" style="margin-top: 10px;">
			</form>
		</div>
		<div>
			<div>
				<h1>Uploaded files</h1>
				<input type="text" width="100px" placeholder="Search" id="searchFiles">
			</div>
			<table>
				<div id="searchOutput"></div>
			</table>
		</div>
	</body>
</html>
