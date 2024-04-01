<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .latar-cerah {
            background-color: #fdABAB;
        }

        .latar-gelap {
            background-color: #98A9B0;
        }
    </style>
</head>
<?php
// $angka = mt_rand(1, 10);
// if ( $angka % 2 === 0) {
//     echo "Latar Cerah";
//     echo "<br>$angka";
//     echo "<body class = \"latar-cerah\">";
// } else {
//     echo "Latar Gelap";
//     echo "$angka";
//     echo "<body class = \"latar-gelap\">";
// }
$angka = mt_rand(1, 10);
if ($angka % 2 === 0) {
    $style = "latar-cerah";
} else {
    $style = "latar-gelap";
}
?>

<body class="<?php echo $style; ?>">
<?php 
$n = 5;
for ($i=0; $i < $n; $i++) { 
    # code...
}
?>
</body>

</html>