<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<center>
		<h2>Input Data</h2>
		<form method="POST" action="proses.php">
		<tr>
			<td>Masukkan NIM</td>
			<td>:</td>
			<td><input type="number" name="input1"></td>
		</tr>

		<tr>
			<td>Masukkan Nama</td>
			<td>:</td>
			<td><input type="text" name="input2"></td><br><br>
		</tr>

		<tr>
			<td>Masukkan Alamat</td>
			<td>:</td>
			<td><input type="text" name="input3"></td>
		</tr>
			 
		
		<tr>
			<td>Masukkan Gambar</td>
			<td>:</td>
			<td><input type="file" name="input4"></td>
		</tr>
			

		<tr>
			<td>Pilih Operasi</td>
			<td>:</td>
			<td>
				<select name="input5">
  									<option value="insert">insert</option><br>
  									<option value="update">update</option><br>
  									<option value="select">select</option><br>
  									<option value="delete">delete</option><br>
								</select>
			</td>
		</tr>
 
		<tr>
			<td><input type="submit" name="submit"></td>
		</tr>

			</center>
		</form>
	</table>

</body>
</html>