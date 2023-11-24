<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<form action="<?php echo site_url('welcome/aksi_upload'); ?>" method="POST" enctype="multipart/form-data">
		<input type="file" name="berkas">
		<br><br>
		<input type="submit" value="upload">
		<h1>hello world</h1>
		<h1>hello world</h1>
	</form>
</body>
</html>
