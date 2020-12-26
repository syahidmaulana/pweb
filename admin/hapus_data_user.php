<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('../dbconnect.php');

//query hapus
$query = "DELETE FROM user WHERE id_user = '$id' ";

if (mysqli_query($conn , $query)) {
	header("location:berhasil.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn , $query);
}

mysqli_close($conn);
?>