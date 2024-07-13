<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 03 - Latihan 1</title>
	<style type="text/css">
		.latar-cerah { background-color: #FDABAB; }
		.latar-gelap { background-color: #98A9B0; }
	</style>
</head>
<?php
  //Cara 1
	/*$angka = mt_rand(1,10);

	if ($angka % 2 == 0) {
		echo "<body class=\"latar-cerah\">";
	}
	else {
		echo "<body class=\"latar-gelap\">";
	}


	echo "</body>";*/

	$angka = mt_rand(1,10);

	if ($angka % 2 == 0) {
		$style = "latar-cerah";
	}
	else {
		$style = "latar-gelap";
	}
?>

<body class="<?=$style?>">
	
</body>

</html>