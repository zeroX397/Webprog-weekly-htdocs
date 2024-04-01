<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <?php
        $n = 10;
        for($i = 1; $i < $n; $i++){
            $str = "id=$i&nama=nama$i";
            echo "<p><a href='/Week04_TestQuery?id=$i&nama=nama$i'>Link ID $i</a></p>";
        };
        ?>
        
    </section>
</body>
</html>