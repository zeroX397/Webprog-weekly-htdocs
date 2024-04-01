<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $mk = array(
        array("status" => "wajib", "kode" => "1604A011", "nama" => "Alpro"),
        array("status" => "wajib", "kode" => "1604A021", "nama" => "OOP"),
        array("status" => "pilihan", "kode" => "1604A19A", "nama" => "Special Topic in AI"),
        array("status" => "pilihan", "kode" => "1604A19B", "nama" => "Special Topic in DS"),
        array("status" => "pilihan", "kode" => "1604A19C", "nama" => "Modelling and Simulation")
    );

    echo $mk[0]["nama"];
    echo "<ol>";
    foreach ($mk as $key => $value) {
        // $kode = $value["kode"];
        // $nama = $value["nama"];
        // $status = $value["status"];

        // $kode = $mk["kode"];
        // $nama = $mk["nama"];
        // $status = $mk["status"];
        
        $kode = $mk[$key]["kode"];
        $nama = $mk[$key]["nama"];
        $status = $mk[$key]["status"];
        
        echo "<li>$kode - $nama ($status)</li>";

    }
    echo "</ol>";
    ?>
</body>

</html>