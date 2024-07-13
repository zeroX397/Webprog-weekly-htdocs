<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 4 - Link Data</title>
</head>
<body>
	<ul>
		<li><a href="week4.php?id=NRP001&nama=Web1">NRP 001</a></li>
		<li><a href="week4.php?id=NRP002&nama=Web2">NRP 002</a></li>
		<li><a href="week4.php?id=NRP003&nama=Web3">NRP 003</a></li>
	</ul>

	<?php
		$n = 10;

		for($i=1; $i<=$n; $i++)
		{
			/*$str = "id=$i&nama=nama$i";
			echo "<p><a href='week4.php?$str'>Link ID $i</a></p>";*/

			echo "<p><a href='week4.php?id=$i&nama=nama$i'>Link ID $i</a></p>";
		}

	?>
	<p><a href="week4.php?id=1&nama=nama1">Link ID 1</a></p>
	<p><a href="week4.php?id=2&nama=nama2">Link ID 2</a></p>
</body>
</html>