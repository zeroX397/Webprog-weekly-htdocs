<?php 
session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Peserta</title>
    <style type="text/css">
        th, td {border: 1px solid black;}
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
        </tr>
        <?php 
        $peserta = $_SESSION['daftar_peserta'];
        
        foreach($peserta as $key => $value){
            echo "<tr>";
            echo "<td>".$value['nama_depan']."</td>";
            echo "<td>".$value['nama_belakang']."</td>";
            echo "</tr>";
        }
        
        ?>
        
    </table>
</body>
</html>