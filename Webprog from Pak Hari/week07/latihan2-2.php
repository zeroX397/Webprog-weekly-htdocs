<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 7 - Latihan 2-2</title>
</head>
<body>
	<?php
		$buah = $_POST["buah"];

		//Mengambil data dari Session
		if (isset($_SESSION["daftar_buah"])) {
			$var_buah = $_SESSION["daftar_buah"];
		}
		else {
			$var_buah = array();
		}

		//Menambahkan buah ke data
		$var_buah[] = $buah;

		//Menampilkan buah
		echo "<ul>";
		foreach ($var_buah as $key => $value) {
			echo "<li>$value</li>";
		}
		echo "</ul>";

		//Menyimpan kembali ke Session
		$_SESSION["daftar_buah"] = $var_buah;

	?>

	<a href="latihan2-1.php">Back to Latihan2-1</a>
</body>
</html>