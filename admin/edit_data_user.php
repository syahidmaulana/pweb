<!DOCTYPE html>
<html lang="en">
<head>
	<title>PERPUSTAKAAN DIGITAL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 

//koneksi database
include('../dbconnect.php');

//query
$query = "SELECT * FROM user WHERE id_user='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data User</h3><br>
	<form role="form" action="edit_user.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id" value="<?php echo $row['id_user']; ?>">

		<div class="form-group col-md-4">
			<label>Nama Depan</label>
			<input type="text" name="nd" class="form-control" value="<?php echo $row['nama_depan']; ?>">			
		</div>

		<div class="form-group col-md-4">
			<label>Nama Belakang</label>
			<input type="text" name="nb" class="form-control" value="<?php echo $row['nama_belakang']; ?>">			
		</div>
		<div class="form-group col-md-4">
			<label>Telp</label>
			<input type="text" name="telp" class="form-control" value="<?php echo $row['telp']; ?>">			
		</div>
		<div class="form-group col-md-12">
			<label>Username</label>
			<input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">			
		</div>

		<div class="form-group col-md-12">
			<label>Password</label>
			<input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>">			
		</div>
		<div class="form-group col-md-12">
			<label>NISN</label>
			<input type="text" name="nisn" class="form-control" value="<?php echo $row['nisn']; ?>">			
		</div>
		<!-- <div class="form-group col-md-12">
			<label>level</label> -->
			<!-- <input type="hidden" name="kode_bk" class="form-control" value="<?php echo $row['level']; ?>"> -->
			<button type="submit" class="btn btn-success btn-block">Update</button>				
		</div>
		

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 