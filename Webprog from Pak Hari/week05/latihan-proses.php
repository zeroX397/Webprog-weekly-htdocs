<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 5 - Latihan Proses</title>
</head>
<body>
	<?php
		$angka = $_POST['angka'];

		if ($angka % 2 == 0) {
			//echo "Angka adalah $angka, GENAP";
			header("location: latihan-genap.php?angka=$angka");
		}
		else {
			//echo "Angka adalah $angka, GANJIL";
			header("location: latihan-ganjil.php?angka=$angka");
		}

	?>
</body>
</html>