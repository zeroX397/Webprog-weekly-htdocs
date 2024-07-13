<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 6 - Array</title>
</head>
<body>
	<?php
		$array_kosong = array();

		$array_biasa = array(1,2,3,4,5,6);

		$array_data = array(1,2,"nama"=>"Bejo","gender"=>"cowok");

		print_r($array_biasa);
		echo "<br>";

		print_r($array_data);
		echo "<br>";

		$array_data[0] = "Halo";
		$array_data["usia"] = 20;
		$array_data[] = 100;

		print_r($array_data);
		echo "<br>";

		$array_data[20] = 200;
		$array_data[] = 201;

		print_r($array_data);
		echo "<br><br>";

		foreach ($array_data as $key => $value) {

			echo "$key = $value <br>";
			
		}



	?>

</body>
</html>