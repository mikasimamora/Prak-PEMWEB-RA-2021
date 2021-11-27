<?php 

	require 'fungsi.php';

	//koneksi database
	$koneksi = mysqli_connect("localhost", "root", "", 'buah_buahan');

	//cek tombol submit
	if(isset($_POST["submit"])){

		//cek data berhasil di kirim
		if ( tambah($_POST) > 0 ) {
			echo "
				<script>
					alert('Berhasil');
					document.location.href = 'index.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('Gagal');
					document.location.href = 'index.php';
				</script>
			";
		}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TAMBAH DATA</title>
</head>
<body>

	<h1>Tambah Data Buah</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nama">Nama : </label><input type="text" name="nama" id="nama" required>
			</li>

			<li>
				<label for="berat">Berat : </label><input type="text" name="berat" id="berat" required>
			</li>

			<li>
				<label for="rasa">Rasa : </label><input type="text" name="rasa" id="rasa" required>
			</li>

			<li>
				<label for="gambar">Gambar : </label><input type="file" name="gambar" id="gambar">
			</li>

			
			<button type="submit" name="submit">Kirim</button>
			

		</ul>

	</form>


</body>
</html>