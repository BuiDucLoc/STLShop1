<?php 
	class DB{
		protected $con;
		protected $severname = "localhost";
		protected $username = "root";
		protected $password ="";
		protected $dbname = "mvc";
		protected $table;
		protected $update_cot;
		protected $inset;
		protected $value;

		function __construct(){
			$this->con = mysqli_connect($this->severname, $this->username, $this->password);
			mysqli_select_db($this->con, $this->dbname);
			mysqli_query($this->con,"SET NAMES 'utf8'");
		}
		function layid($id){
			$qr = "SELECT * FROM $this->table WHERE id = $id";
			$resuft = mysqli_query($this->con, $qr);
			return mysqli_fetch_assoc($resuft);
		}
		function laytatca(){
			$qr = "SELECT * FROM $this->table";
			$resuft = mysqli_query($this->con, $qr);
			$a = mysqli_fetch_all($resuft, MYSQLI_ASSOC);
			return json_encode($a);

		}
		function laytatcajs(){
			$qr = "SELECT * FROM $this->table";
			$resuft = mysqli_query($this->con, $qr);
			$arr = array();
			while ($row = mysqli_fetch_array($resuft)) {
				$arr[] = $row;
			}
			return json_encode($arr);
		}
		function update($id){
			$qr = "UPDATE $this->table SET $this->update_cot WHERE id = $id";
			print_r($qr);
			$a = mysqli_query($this->con, $qr);
			if ($a ==true) {
				echo "cap nhap thanh cong";
			}
			else{
				echo "capnhapthatbai";
			}
		}
		function delete($id){
			$qr = "DELETE FROM $this->table WHERE id =$id";
			print_r($qr);
			
			if (mysqli_query($this->con,$qr)) {
				return 1;
			}
			else{
				return 0;
			}
		}
		function insert2(){
			$qr = "INSERT INTO $this->inset VALUES $this->value";
			print_r($qr);
			if (mysqli_query($this->con,$qr)==true) {
				return 1;
			}
			else {
				return 0;
			}
		}

	}

 ?>