<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 5 -Latihan Date</title>
</head>
<body>
	<form method="post" action="latihan-date.php">
		<input type="date" name="tgl1">
		<input type="date" name="tgl2">
		<input type="submit" name="submit" value="Proses">
	</form>
	<br>
	<?php
		if (isset($_POST['submit'])) {

			$tgl1 = $_POST['tgl1'];
			$tgl2 = $_POST['tgl2'];

			$selisih = strtotime($tgl2) - strtotime($tgl1);
			echo ceil($selisih / (24*60*60));


		}

	?>
</body>
</html>