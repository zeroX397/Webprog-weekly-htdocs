<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data" action="process.php">
        <label for="">Nama</label>
        <input type="text" name="nama">
        <label for="">File</label>
        <input type="file" name="file" accept="image/*">
        <input type="submit" name="submit" value="Upload File">
    </form>
</body>

</html>