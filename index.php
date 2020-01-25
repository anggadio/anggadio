<?php 
require 'functions.php';

$book = query("SELECT * FROM book_tb");


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Buku</title>
</head>
<body>

	<h1>Data Buku</h1>
<br>
	<button>
	<a href="tambah.php">Tambah Data Buku</a>
	</button>
<br><br>
<table border="1" cellpadding="10" cellspacing="">
	
<tr>
	<th>No.</th>
	<th>Action</th>
	<th>Name</th>
	<th>Category</th>
	<th>Writer</th>
	<th>Publication</th>
	<th>Gambar</th>
	<th>Category Book</th>
	<th>Writer</th>
</tr>

	<?php $i = 1; ?>
	<?php foreach ($book as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">Edit</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>">Delete</a>
		</td>
		<td><?= $row["name"]; ?></td>
		<td><?= $row["category_id"]; ?></td>
		<td><?= $row["writer_id"]; ?></td>
		<td><?= $row["publication_year"]; ?></td>
		<td><img src="img/<?= $row["img"]; ?>" width="50"></td>
		<td><?= $row["category_name"]; ?></td>
		<td><?= $row["writer_name"]; ?></td>

	</tr>
	<?php $i++; ?>
<?php endforeach; ?>

</table>

</body>
</html>