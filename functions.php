<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "bootcamp");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;

	$name = $data["name"];
	$category_id = $data["category_id"];
	$writer_id = $data["writer_id"];
	$publication_year = $data["publication_year"];
	$img = $data["img"];
	$category_name = $data["category_name"];
	$writer_name = $data["writer_name"];

	$query = "INSERT INTO book_tb
				VALUES
			('', '$name', '$category_id', '$writer_id', '$publication_year', '$img', '$category_name', '$writer_name')
			";
			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM book_tb WHERE id = $id");
	return mysqli_affected_rows($conn);
	
}

 ?>

