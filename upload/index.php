<!DOCTYPE html>
<html>
	<head>
		<title>Upload files</title>
		<meta charset="utf-8">
		</head>
	<body>
		<div style="float: left; margin-left: 20px; margin-right: 20px;">
			<h1 style="-webkit-margin-before:0px;">Upload your files</h1>
			<form method="post" action="upload.php" enctype="multipart/form-data">
				<p><input type="file" name="fileToUpload" id="fileToUpload"></p>
				<h3>Max size: 100MB</h3>
				<p><input type="submit" name="submit" value="Upload file" style="width: 200px; height: 50px;"></p>
			</form>
			<form method="post" action="uploadLink.php" enctype="multipart/form-data">
				<br>
				<h1>Upload Google Drive files</h1>
				<h3>Still not working</h3>
				<input type="text" name="linkToUpload" value="https://www.marcodifrancesco.com/upload/uploads/UNIPD%20Scienze%20.pdf" style="margin-right: 10px; width: 200px;">
				<input type="submit" name="submit" value="Upload from link" disabled="yes" style="margin-top: 10px;">
			</form>
		</div>
		<div>
			<h1>Uploaded files</h1>
			<table>
				<?php
				foreach ((glob('uploads/*')) as $file) {
					echo "<tr>";
					echo "<td style='padding-right:10px;'>";
					echo $file;
					echo "</td>";
					echo "<td>";
					echo date ("d F Y H:i:s", filemtime($file));
					echo "</td>";
					echo "<td>";
					echo "<a href='".$file."' download='".$file."'>Download</a>";
					echo "</td>";
					echo "</tr>";
				}
				?>
			</table>
		</div>
	</body>
</html>
