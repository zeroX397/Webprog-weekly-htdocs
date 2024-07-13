<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 03 - PHP</title>
</head>
<body>
	<p>Hello From PHP</p>

	<?php

		echo "This Hello is generated from PHP";

		ECHO "<p>Hello From PHP</p>";

		$a = 10;
		echo $a;
		$a = "ABC";
		echo $a;

		$first = "John";
		$last = "Doe";
		echo "<br>";
		echo $first . " " . $last;
		echo "<br>";
		echo "Nama: $first $last";
		echo "Nama: " . $first . " " . $last;
		echo 'Nama: $first $last';

	?>

	<p>Hello From PHP</p>

	<?php
		$myteam = "Justice League";
		$yourteam = "The Avengers";
		$myleader = "Batman";
		$yourleader = "Ironman";

		echo "<u>$myteam</u> adalah kelompok pahlawan super pimpinan <b>\"$myleader\"</b>,";

		//echo "<u>" . $myteam . "</u> adalah kelompok pahlawan super pimpinan <b>\"". $myleader ."\"</b>,";

	?>
	<br>
	<u>Justice League</u> adalah kelompok pahlawan super pimpinan <b>"Batman"</b>,

	<?php

		echo "Nama: $first $last";

	?>
</body>
</html>