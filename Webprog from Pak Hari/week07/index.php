<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 7 - Cookie dan Session</title>
</head>
<body>
	<?php
		//Setting...
		setcookie("myCookie","Ini adalah Test Cookie Saya", time()+60);
		$_SESSION["mySession"] = "Ini adalah Test Session Saya";

		//Read...
		echo $_COOKIE["myCookie"]."<br>";
		echo $_SESSION["mySession"]."<br>";
	?>
</body>
</html>