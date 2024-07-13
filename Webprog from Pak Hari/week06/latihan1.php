<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 6 - ForEach</title>
</head>
<body>
	<?php
		$mk = array(	
						array("status"=> "wajib", "kode"=> "1604A011", "nama"=> "Alpro"),
						array("status"=> "wajib", "kode"=> "1604A021", "nama"=> "OOP"),
						array("status"=> "pilihan", "kode"=> "1604A19A", "nama"=> "Special Topic in AI"),
						array("status"=> "pilihan", "kode"=> "1604A19B", "nama"=> "Special Topic in DS"),
						array("status"=> "pilihan", "kode"=> "1604A19C", "nama"=> "Modelling and Simulation")
					);


		//OOP
		echo $mk[1]["nama"];

		echo "<ol>";
		foreach ($mk as $key => $value) {
			//$kode = $value["kode"];
			//$nama = $value["nama"];
			//$stat = $value["status"];

			$kode = $mk[$key]["kode"];
			$nama = $mk[$key]["nama"];
			$stat = $mk[$key]["status"];

			echo "<li>$kode - $nama ($stat)</li>";
		}
		echo "</ol>";
	?>

	<?php
		$nilai = array(
								array("nisbi"=>"A", "min"=>81, "max"=>100),
								array("nisbi"=>"AB", "min"=>73, "max"=>80),
								array("nisbi"=>"B", "min"=>66, "max"=>72)
							);

		$nilai = array(
								"A" => array("min"=>81, "max"=>100),
								"AB" => array("min"=>73, "max"=>80),
								"B" => array("min"=>66, "max"=>72)
							);

	?>

</body>
</html>