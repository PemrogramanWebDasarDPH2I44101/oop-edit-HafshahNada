<?php
	class OOP{
		private $conn;
		

		public function  crud(){
			$servername = "localhost";
			$username	= "root";
			$password	= "";
			$db			= "login";
			$this->conn=mysqli_connect($servername,$username,$password,$db);
			
		}

		public function select(){
			$sql="SELECT * from Mahasiswa";
			return mysqli_query($this->conn,$sql);
			
		}
		public function update(){
			$input1=$_POST['input_1'];
			$input2=$_POST['input_2'];
			$input3=$_POST['input_3'];
			$input4=$_POST['input_4'];

			$sql ="UPDATE siswa SET nim='$nim',nama='$nama', alamat='$alamat',gambar='$gambar' where nim='$nim'";
			
		}
		public function insert(){
			
			$input1=$_POST['input_1'];
			$input2=$_POST['input_2'];
			$input3=$_POST['input_3'];
			$input4=$_POST['input_4'];


			$sql = "INSERT INTO siswa(nim, nama, alamat, gambar)
					VALUES ('$input1','$input2', '$input3','$input4')";
			mysqli_query($this->conn,$sql);
			
		}
		public function delete(){

			$input1=$_POST['input_1'];
			$input2=$_POST['input_2'];
			$input3=$_POST['input_3'];
			$input4=$_POST['input_4'];
			$sql = "DELETE from siswa where nim=$input1";
			mysqli_query($this->conn,$sql);
			
		}

		public function view_data($nim){
			$sql = "SELECT * FROM siswa";
			return mysqli_query($this->conn,$sql);
		}

	}

$crud= new Crud();
@$operasi=$_POST['input_5'];

if($operasi=="insert"){
	$crud->insert(); 
	echo "Insert Berhasil";
}

	
if($operasi=="update"){
	$crud->update();
	require_once('edit.php');
}
	
if($operasi=="select"){
	$result=$crud->select(); 
	require_once('data.php');
}

if($operasi=="delete"){
	$crud->delete();
	echo "Delete Berhasil";
}


?>

