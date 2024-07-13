<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 5 - Date</title>
</head>
<body>
	<?php
		date_default_timezone_set("Asia/Jakarta");

		echo strtotime("now");
		echo "<br>";

		echo strtotime("+30 seconds");
		echo "<br>";

		echo date("Y-m-d H:i:s");
		echo "<br>";

		echo date("Y-m-d H:i:s", strtotime("+30 seconds"));
		echo "<br>";

		$tanggal = strtotime("+15 days");
		echo date("Y-m-d H:i:s", $tanggal);
		echo "<br>";




	?>
</body>
</html>