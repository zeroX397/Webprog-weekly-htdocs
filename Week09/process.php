<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nama = $_POST['nama'];
    $photo = $_FILES['file'];

    echo $photo['tmp_name'] . "<br>";
    echo $photo['name'] . "<br>";
    echo $photo['size'] . "<br>";
    echo $photo['type'] . "<br>";
    echo $photo['error'] . "<br>";

    $info = getimagesize($photo['tmp_image']);
    $dst = "uploads/" . $photo['name'];
    $cek - move_uploaded_file($photo['tmp_name'], $dst);

    if ($cek) {
        echo "Upload suskes. <br>";
    } else {
        "Upload gagal. <br>";
    }
    ?>
</body>

</html>