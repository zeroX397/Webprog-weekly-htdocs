<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 5 - Form</title>
</head>
<body>
	<form method="post" action="index-proses.php">
		<label>Nama:</label>
		<input type="text" name="nama" value="" required placeholder="Masukkan Nama Anda" autofocus>
		<br>
		<label>Pass:</label>
		<input type="password" name="pass" value="" required>
		<br>
		<label>Gender:</label>
		<input type="radio" name="gender" value="M">Male
		<input type="radio" name="gender" value="F" checked>Female
		<br>
		<label>Comment:</label>
		<textarea name="comment">.. Value ..</textarea>
		<br>
		<label>Pilihan:</label>
		<select name="pilihan">
			<option value="1">Pilihan 1</option>
			<option value="2">Pilihan 2</option>
			<option value="3" selected>Pilihan 3</option>
		</select>
		<br>
		<input type="submit" name="submit" value="Proses Data">
	</form>
	<br><br>
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