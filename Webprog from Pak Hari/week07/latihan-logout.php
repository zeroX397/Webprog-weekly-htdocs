<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 7 - Latihan 1 Logout</title>
</head>
<body>
	<?php
		setcookie("myUser", "", time()-3600);

		header("location: latihan.php");
	?>
</body>
</html>