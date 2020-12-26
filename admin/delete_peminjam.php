<?php 

$id = $_GET['id'];


include('../dbconnect.php');

//query hapus
$query = "DELETE FROM pinjam WHERE id_peminjaman= '$id' ";

if (mysqli_query($conn , $query)) {
	# redirect ke index.php
	header("location:berhasil.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>