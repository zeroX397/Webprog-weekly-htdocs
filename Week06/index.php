<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 06</title>
</head>

<body>
    <?php
    $array_kosong = array();
    $array_biasa = array(1, 2, 3, 4, 5);
    $array_data = array(1, 2, "nama" => "Bejo", "gender" => "Laki-laki", 3);
    $array_data[20] = 200;
    $array_data [] = 201;
    $array_data [18] = "ouBUIA";
    
    print_r($array_kosong); echo "<br>";
    print_r($array_biasa); echo "<br>";
    print_r($array_data); echo "<br>";

    foreach ($array_data as $key => $value) {
        echo "$key = $value <br>";
    }
    ?>
</body>

</html>