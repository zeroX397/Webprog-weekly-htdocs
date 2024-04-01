
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action "latihan2.php"></form>
    <input type="checkbox" name="hero" value="Batman">Batman
    <input type="checkbox" name="hero" value="Batman">Thor
    <input type="checkbox" name="hero" value="Batman">Hulk
    <input type = "submit" name="button">

    <?php
    $hero = $_POST [['hero']]
    
    ?>
</body>
</html>