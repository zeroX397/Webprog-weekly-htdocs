<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 4 - Image dan Link</title>
	<style type="text/css">
		a:link { color: green; }
		a:hover { color: red; }
		a:visited { color: black; }
		a:active { color: yellow; }

		.makan:link {
			color: blue;
			text-decoration: none;
		}
		.makan:hover {
			color: red;
			text-decoration: underline;
		}
		.minum:link {
			color: red;
			font-weight: bold;
		}
		.minum:hover {
			color: blue;
			text-decoration: none;
			font-weight: normal;
		}
	</style>
</head>
<body>
	<p>Makanan</p>
	<ul>
		<li><a class="makan" href="burger.php">Burger</a></li>
		<li><a class="makan" href="pizza.php">Pizza</a></li>
	</ul>
	<p>Minuman</p>
	<ul>
		<li><a class="minum" href="air.php">Air</a></li>
		<li><a class="minum" href="cola.php">Cola</a></li>
	</ul>


	<?php
		$dadu = mt_rand(1,6);
		echo "<img src='images/$dadu.jpg'>";

		/*if ($dadu == 1) {
			echo "<img src='images/1.jpg'>";
		} 
		else if ($dadu == 2) {
			echo "<img src='images/2.jpg'>";
		}*/

	?>
	<img src="images/1.jpg">

	<img src="images/background.png" alt="Ini Gambar Background">

	<img src="https://www.ubaya.ac.id/wp-content/uploads/sites/20/2022/12/logoUbaya.png">

	<img src="https://picsum.photos/200">

	<p>Link....</p>

	<p>Link ke Week4.php klik <a href="week4.php">sini</a></p>

	<p>Link ke Web Ubaya klik <a href="https://www.ubaya.ac.id" target="_blank">sini</a></p>

	<p>Link ke Bookmark <a href="#tips">tips</a></p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p id="tips">TIPS DISINI</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>
	<p>...</p>

</body>
</html>