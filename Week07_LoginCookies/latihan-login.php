<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Proses</title>
</head>

<body>
    <?php
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    if($pass == "admin"){
        setcookie("usercookie", "$user", time()+2147483648);
        header("location: latihan-home.php");
    }
    else{
        echo "Sorry, wrong password. Please try again.";
    }


    ?>
</body>

</html>