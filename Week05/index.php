<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="proses.php">
        <label>Nama:</label>
        <input type="text" name="name" value="Web" required autofocus><br>
        <label>Password:</label>
        <input type="password" require><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="male"required>Male
        <input type="radio" name="gender" value="female" checked>Female<br>
        <label>Comments</label>
        <textarea name="comment">comment</textarea><br>
        <label>Selection:</label>
        <select name="pilihan">
            <option value="1">Pilihan A</option>
            <option value="2">Pilihan B</option>
            <option value="3" selected>Pilihan C</option>
        </select>
        <input type="submit" name="submit" value="Submit!">
    </form>

</body>

</html>