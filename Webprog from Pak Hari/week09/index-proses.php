<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 9 - Upload Proses</title>
</head>
<body>
	<?php
		$nama = $_POST['nama'];
		$photo = $_FILES['photo'];

		echo $photo['tmp_name']."<br>";
		echo $photo['name']."<br>";
		echo $photo['size']."<br>";
		echo $photo['type']."<br>";
		echo $photo['error']."<br>";

		$info = getimagesize($photo['tmp_name']);
		if (!empty($info)) { 

			if ($photo['type'] == "image/jpeg") {

				if ($photo['size'] <= 1024000) {

					//$dst = "uploads/".$photo['name'];
					$ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
					$dst = "uploads/$nama.$ext";

					$cek = move_uploaded_file($photo['tmp_name'], $dst);

					if ($cek) {
						echo "Upload Sukses. <br>";

						$source = imagecreatefromjpeg($dst);
						$width = imagesx($source);
						$height = imagesy($source);

						$result = imagecreatetruecolor($width/4, $height/4);

						imagecopyresampled($result, $source, 0, 0, 0, 0, $width/4, $height/4, $width, $height);

						imagejpeg($result, $dst);
					}
					else {
						echo "Upload Gagal. <br>";
					}
				}
				else {
					echo "Ukuran File Maks 1 MB. <br>";
				}
			}
			else {
				echo "Hanya bisa upload file JPEG. <br>";
			}

		}
		else {
			echo "Hanya bisa digunakan untuk upload gambar. <br>";
		}
	?>
</body>
</html>