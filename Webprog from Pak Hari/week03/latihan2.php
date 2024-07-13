<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 03 - Latihan 2</title>
	<style type="text/css">
		.warna-merah { color: red; }
		.warna-biru { color: blue; }
	</style>
</head>
<body>
	<?php
		$n = 5;
		for($i=1; $i<=$n; $i++)
		{
			if ($i % 2 == 0) {
				echo "<p class='warna-biru'>Paragraph ke-$i</p>";
			}
			else {
				echo "<p class='warna-merah'>Paragraph ke-$i</p>";
			}

		}

	?>
	<p>Paragraph ke-1</p>
</body>
</html>