<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show cookie</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["myCookie"])){
        echo $_COOKIE["myCookie"]. "<br>";
    }
    else{
        echo "Cookie tidak ada. <br>";
    }
    if(isset($_SESSION["mySession"])){
        echo $_SESSION["mySession"]. "<br>";
    }
    else{
        echo "Session tidak ada. <br>";
    }
    ?>
</body>
</html>