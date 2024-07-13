<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 7 - Show Cookie dan Session</title>
</head>
<body>
	<?php

		if (isset($_COOKIE["myCookie"])) {
			echo $_COOKIE["myCookie"]."<br>";	
		}
		else {
			echo "Cookie Belum Ada";
		}

		if (isset($_SESSION["mySession"])) {
			echo $_SESSION["mySession"]."<br>";	
		}
		else {
			echo "Session Belum Ada";
		}
		
	?>
</body>
</html>