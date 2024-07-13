<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 5 - Proses</title>
</head>
<body>
	<?php

		if (isset($_POST['submit'])) {

			$nama = $_POST['nama'];
			$pass = $_POST['pass'];
			$gender = $_POST['gender'];
			$comment = $_POST['comment'];
			$pilihan = $_POST['pilihan'];


			echo "$nama <br>";
			echo "$pass <br>";	
			echo "$gender <br>";
			echo "$comment <br>";
			echo "$pilihan <br>";	

		}
		


	?>
</body>
</html>