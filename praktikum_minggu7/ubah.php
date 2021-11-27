<?php 

	require 'fungsi.php';


	//ambil data di url
	$id = $_GET["id"];
	
	// query berdasarkan id
	$mhs = query("SELECT * FROM databuah WHERE id = $id")[0];

	//cek tombol submit
	if(isset($_POST["submit"])){

		//cek data berhasil di update
		if ( ubah($_POST) > 0 ) {
			echo "
				<script>
					alert('Berhasil Diupdate');
					document.location.href = 'index.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('Gagal Diupdate');
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
	<title>UPDATE DATA</title>
</head>
<body>

	<h1>Update Data Buah</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">
		<ul>
			<li>
				<label for="nama">Nama : </label><input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
			</li>

			<li>
				<label for="berat">berat : </label><input type="text" name="berat" id="berat" required value="<?= $mhs["berat"] ?>">
			</li>

			<li>
				<label for="rasa">rasa : </label><input type="text" name="rasa" id="rasa" required value="<?= $mhs["rasa"] ?>">
			</li>

			<li>
				<label for="gambar">Gambar : </label>
				<img src="img/<?= $mhs['gambar']; ?>">
				<input type="file" name="gambar" id="gambar">
			</li>

			
			<button type="submit" name="submit">Update</button>
			

		</ul>

	</form>


</body>
</html>