<?php 
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"]) ) {


	// cek apakah data berhasil ditambahkan atau tidak
	if (tambah($_POST) > 0 ) {
		echo "
			<script>
				alert ('data berhasil ditambahkan!');
				document.location.href ='index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert ('data gagal ditambahkan!');
				document.location.href ='index.php';
			</script>
		";
	}


}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Buku</title>
</head>
<body>


	<h1>Tamabah Data Buku</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="name" >Name :</label>
				<input type="text" name="name" id="name" required>
			</li>
			<li>
				<label for="category_id" >Category :</label>
				<input type="text" name="category_id" id="category_id" required>
			</li>
			<li>
				<label for="writer_id" >Writer Id :</label>
				<input type="text" name="writer_id" id="writer_id" required>
			</li>
			<li>
				<label for="publication_year" >Publication :</label>
				<input type="text" name="publication_year" id="publication_year" required>
			</li>
			<li>
				<label for="img" >Image :</label>
				<input type="text" name="img" id="img" required>
			</li>
			<li>
				<label for="category_name" >Categori Book :</label>
				<input type="text" name="category_name" id="category_name" required>
			</li>
			<li>
				<label for="writer_name" >Writer :</label>
				<input type="text" name="writer_name" id="writer_name" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>