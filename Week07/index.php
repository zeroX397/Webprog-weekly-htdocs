<php? session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba Cookies dan Session</title>
</head>

<body>
    <?php
    setcookie("myCookie", "iusegbskzdhq8yqsvhbspehoigjzoaihgw", time()+5);
    $_SESSION["mySession"] = "Ini adalah test session"."<br>";

    echo $_COOKIE["myCookie"]."<br>";
    echo $_SESSION["mySession"]."<br>";
    ?>
</body>

</html>