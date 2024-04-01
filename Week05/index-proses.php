<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $angka = $_POST['angka'];
    if ($angka % 2 == 0){
        //echo "Angka $angka adalah Genap";
        header("location: latihan-genap.php?angka=$angka");
    }
    else{
        //echo "Angka $angka adalah Ganjil";
        header("location: latihan-ganjil.php?angka=$angka");
    }
    ?>
</body>
</html>