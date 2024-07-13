<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 7 - Latihan 1 Home</title>
</head>
<body>
	<?php
		if (isset($_COOKIE['myUser'])) {

			echo "Welcome ".$_COOKIE["myUser"];	

		}
		else {
			echo "Anda belum login...";
		}
	?>
	<br><br>
	<a href="latihan-logout.php">Logout</a>
</body>
</html>