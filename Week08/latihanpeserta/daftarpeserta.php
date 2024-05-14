<?php 
session_start();
if(isset($_POST['submit'])){
    if(isset($_SESSION['daftar_peserta'])){
        $peserta = $_SESSION['daftar_peserta'];
    }
    else{
        $peserta = array();
    }
    $depan = $_POST['ndepan'];
    $belakang = $_POST['nbelakang'];

    $nama = array("nama_depan" => $depan, "nama_belakang" => $belakang);
    $peserta[] = $nama;

    $_SESSION['daftar_peserta'] = $peserta;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Register</title>
</head>

<body>
    <form method="post" action="daftarpeserta.php">
        Nama Depan  : <input name="ndepan" type="text"><br>
        Nama Belakang : <input name="nbelakang" type="text"><br>
        <input name="submit" type="submit" value="Kirim">
    </form>
</body>

</html>