<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 6 - Latihan 2 Proses</title>
</head>
<body>
	<?php
		$hero = $_POST['hero'];

		rsort($hero);

		foreach ($hero as $key => $value) {
			echo "$value <br>";
		}



	?>
</body>
</html>