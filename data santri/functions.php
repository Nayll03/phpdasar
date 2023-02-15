<?php 
$conn = mysqli_connect("localhost", "root", "", "db_santri");

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
	
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$notelp = htmlspecialchars($data["notelp"]);
	$namaayah = htmlspecialchars($data["namaayah"]);
    $namaibu = htmlspecialchars($data["namaibu"]);


	
	$query = "INSERT INTO santri
				VALUES
			  ('', '$nama', '$alamat', '$notelp', '$namaayah', '$namaibu')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM santri WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$notelp = htmlspecialchars($data["notelp"]);
	$namaayah = htmlspecialchars($data["namaayah"]);
	$namaibu = htmlspecialchars($data["namaibu"]);
	

	$query = "UPDATE santri SET
				id = '$id',
				nama = '$nama',
				alamat = '$alamat',
				notelp = '$notelp',
				namaayah = '$namaayah'
                namaibu = '$namaibu'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}


function cari($keyword) {
	$query = "SELECT * FROM santri
				WHERE
			  id LIKE '%$keyword%' OR
			  nama LIKE '%$keyword%' OR
			  alamat LIKE '%$keyword%' OR
			  notelp LIKE '%$keyword%' OR
			  namaayah LIKE '%$keyword%' OR
			  namaibu LIKE '%$keyword%' 

			";
	return query($query);
}

?>