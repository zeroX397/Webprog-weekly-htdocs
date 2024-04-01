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
    $id = $_GET["id"];
    $nama = $_GET["nama"];
    echo "ID yang dikirim = ".$id;
    echo "<br>";
    echo "Nama yang dikirim = ".$nama;
    ?>
    </section>
</body>
</html>