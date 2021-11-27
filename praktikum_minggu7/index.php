<?php  
	//koneksi ke database
	require 'fungsi.php';
	require 'bootstrap.html';
	$databuah = query("SELECT * FROM databuah ORDER BY id ASC");

	//tombol cari diklik
	if ( isset($_POST["cari"]) ) {
		$databuah = cari($_POST["keyword"]);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Minggu7</title>
</head>
<body>
	<h1>Daftar Buah</h1>

	<a href="tambah.php">Tambah Data Buah</a>
	<br><br>

	<form action="" method="post">
		<button type="submit" name="cari">Cari</button>
		<input type="text" name="keyword" size="30" autofocus placeholder="Searching..." autocomplete="off">

	</form>
	<br>

	<table class="table table-striped">

		<thead>
		<tr>
			<th scope="col">No.</th>
			<th scope="col">Aksi</th>
			<th scope="col">Gambar</th>
			<th scope="col">berat</th>
			<th scope="col">Nama</th>
			<th scope="col">Rasa</th>
		</tr>
		</thead>

		<tbody>
		<?php $i = 1; ?>
		<?php foreach ( $databuah as $row ):?>

		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin akan menghapus? ')">Hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="80"></td>
			<td><?= $row["berat"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["rasa"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>