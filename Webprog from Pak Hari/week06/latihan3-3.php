<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 6 - Latihan 3-3</title>
</head>
<body>
	<?php
		$warna = $_POST['warna'];

		foreach ($warna as $key => $value) {
			echo "<div style=\"background-color: #$value;\">";
			echo "$value";
			echo "</div>";
		}
	?>
</body>
</html>