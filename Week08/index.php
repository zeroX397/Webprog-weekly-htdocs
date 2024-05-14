<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 08 | Table</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <p>Tabel 4 baris, 3 kolom</p>
    <table>
        <tr>
            <td>Row 1 Column 1</td>
            <td colspan="2">Row 1 Column 2</td>
            <!-- <td>Row 1 Column 3</td> -->
        </tr>
        <tr>
            <td rowspan="2">Row 2 Column 1</td>
            <td>Row 2 Column 2</td>
            <td>Row 2 Column 3</td>
        </tr>
        <tr>
            <td>Row 3 Column 1</td>
            <td>Row 3 Column 2</td>
            <!-- <td>Row 3 Column 3</td> -->
        </tr>
        <tr>
            <td>Row 4 Column 1</td>
            <td>Row 4 Column 2</td>
            <td>Row 4 Column 3</td>
        </tr>
    </table>
</body>
</html>