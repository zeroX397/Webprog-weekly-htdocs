<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 9 - File Upload</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data" action="index-proses.php">

		<label>Nama:</label>
		<input type="text" name="nama"><br>
		<label>File:</label>
		<input type="file" name="photo" accept="image/jpeg"><br>
		<input type="submit" name="submit" value="Upload File">
		
	</form>
</body>
</html>