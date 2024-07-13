<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 8 - Latihan 3</title>
	<style type="text/css">
		th, td { border: 1px solid black; }
	</style>
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

		echo "<p>Soal A</p>";
		echo "<table>";
		echo "<tr><th>Status</th><th>Kode</th><th>Nama</th></tr>";

		foreach ($mk as $key => $value) {
			echo "<tr>";
			echo "<td>".$value['status']."</td>";
			echo "<td>".$value['kode']."</td>";
			echo "<td>".$value['nama']."</td>";
			echo "</tr>";
		}

		echo "</table>";

		echo "<p>Soal B</p>";
		echo "<table>";
		echo "<tr><th>Status</th><th>Kode</th><th>Nama</th></tr>";

		$cek = "";
		foreach ($mk as $key => $value) {
			echo "<tr>";

			if ($cek != $value['status']) {
				$cek = $value['status'];

				$x = 0;
				foreach ($mk as $k => $val) {
					if ($val['status'] == $cek) $x++; 
				}

				echo "<td rowspan='$x'>".$value['status']."</td>";	
			}
			
			echo "<td>".$value['kode']."</td>";
			echo "<td>".$value['nama']."</td>";
			echo "</tr>";
		}

		echo "</table>";

		$mk2 = array (	
						"wajib" => array(
							array("kode"=> "1604A011", "nama"=> "Alpro"),
							array("kode"=> "1604A021", "nama"=> "OOP")
						),
						"pilihan" => array(
							array("kode"=> "1604A19A", "nama"=> "Special Topic in AI"),
							array("kode"=> "1604A19B", "nama"=> "Special Topic in DS"),
							array("kode"=> "1604A19C", "nama"=> "Modelling and Simulation")
						)
					);

		echo "<p>Soal A</p>";
		echo "<table>";
		echo "<tr><th>Status</th><th>Kode</th><th>Nama</th></tr>";

		foreach ($mk2 as $status => $matakuliah) {
			
			foreach ($matakuliah as $key => $value) {
				echo "<tr>";
				echo "<td>".$status."</td>";
				echo "<td>".$value['kode']."</td>";
				echo "<td>".$value['nama']."</td>";
				echo "</tr>";
			}
			
		}

		echo "</table>";



	?>
</body>
</html>