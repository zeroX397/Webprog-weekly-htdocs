<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 7 - Latihan 1 Proses</title>
</head>
<body>
	<?php
		$user = $_POST["user"];
		$pass = $_POST["pass"];

		if ($pass == "123456") {
			setcookie("myUser", $user, time()+3600);

			header("location: latihan-home.php");
		}
		else {
			echo "Password Salah.";
		}
	?>
</body>
</html>