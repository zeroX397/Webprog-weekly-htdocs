<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 6 - Latihan 3-2</title>
</head>
<body>
	<form method="post" action="latihan3-3.php">


		<?php
			$jumlah = $_POST['jumlah'];

			for($i=1; $i<=$jumlah; $i++) {
				echo "Warna kotak $i: <input type=\"text\" name=\"warna[]\"><br>";
			}
		?>
	
		<input type="submit" name="submit" value="Proses">
	</form>

</body>
</html>