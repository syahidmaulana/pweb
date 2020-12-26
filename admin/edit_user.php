<?php
//include('dbconnected.php');
include('../dbconnect.php');

$id = $_GET['id'];
$nd = $_GET['nd'];
$nb = $_GET['nb'];
$telp = $_GET['telp'];
$username = $_GET['username'];
$password = $_GET['password'];
$nisn = $_GET ['nisn'];

//query update
$query = "UPDATE user SET nama_depan='$nd' , nama_belakang='$nb' , telp='$telp' 
, username='$username' , password='$password' , nisn='$nisn' WHERE id_user='$id' ";

if (mysqli_query($conn, $query)) {
		header("location:data_siswa.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>