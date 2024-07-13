<?php
	session_start();

	if (isset($_POST['submit'])) {

		if (isset($_SESSION['daftar_peserta'])) {
			$peserta = $_SESSION['daftar_peserta'];
		}
		else {
			$peserta = array();
		}

		$depan = $_POST['depan'];
		$belakang = $_POST['belakang'];

		$nama = array("nama_depan" => $depan, "nama_belakang" => $belakang);
		$peserta[] = $nama;

		$_SESSION['daftar_peserta'] = $peserta;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 8 - Latihan 2 Register</title>
</head>
<body>
	<form method="post" action="latihan2_reg.php">
		Nama Depan: <input type="text" name="depan"><br>
		Nama Belakang: <input type="text" name="belakang"><br>
		<input type="submit" name="submit" value="Kirim">
	</form>
</body>
</html>