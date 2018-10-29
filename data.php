
<!DOCTYPE>
<html>
<head>
<title></title>
</head>
<body>
	<table border="1" width="100%">
		
		<tr align="center">
			
			<th>Nim</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Gambar</th>
			<th>Action</th>
			
		</tr>
	<?php

 	if(mysqli_num_rows($result) > 0){
 	while ( $row = mysqli_fetch_assoc($result)) {
 		$nim= $row['nim'];
 		echo "<tr>";
 		echo "<td>".$row['nim']."</td>";
 		echo "<td>".$row['nama']."</td>";
 		echo "<td>".$row['alamat']."</td>";
 		echo "<td>".$row['gambar']."</td>";
 		?>

 		<td><a href="edit.php?nim=<?php echo $row['nim'];?>">Edit</a></td>
 		<?php
 		echo "</tr>";
 		
 	}
 } else {
 	echo "0 results";
 }

?>



	</table>
</body>
</html>