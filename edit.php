<?php
	require("proses.php");
	$nim = $_GET['nim'];
	$result = $crud->view_data($nim);
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE>
<html>
<head>
<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
	<table border="1" width="100%">

		<form method="POST" action="proses.php">
			Masukkan NIM : <input type="number" value="<?php echo $row['nim'];?>" name="nim" ><br><br>
			Masukkan Nama :<input type="text" value="<?php echo $row['nama'];?>" name="nama" ><br><br>
			Masukkan Alamat :<input type="text" value="<?php echo $row['alamat'];?>" name="alamat" ><br><br>
			Masukkan Gambar : <input type="text" value="<?php echo $row['gambar'];?>" name="gambar"><br><br>


			Pilih Operasi	 : <select name="input5">
  									<option value="insert">Insert</option><br>
  									<option value="update">Update</option><br>
  									<option value="select">Select</option><br>
  									<option value="delete">Delete</option><br>
								</select>
			
			<br><br>
			<input type="submit" name="submit">
		</form>

	</table>
</body>
</html>