<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Home</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["usercookie"])){
        echo "Welcome " .$_COOKIE["usercookie"];
    }
    else{
        echo "You are not logged in yet";
    }
    ?>
    <br><br>
    <a href="latihan-logout.php">Logout</a>
</body>
</html>