<?php
	class usermodel extends DB{
		protected $table = "user(hoten,username,password,email,phone)";
		// function insert($hoten,$username,$password,$email,$phone){
			
		// 	$qr = "INSERT INTO $this->table  VALUES ('$hoten','$username','$password','$email','$phone')";
		// 	$resuft = false;
		// 	if (mysqli_query($this->con,$qr)) {
		// 		$resuft = true;
		// 	}
		// 	return json_encode($resuft);
		// }
		function insert($hoten,$username,$password,$email,$phone){
			$qr1 = "SELECT * FROM user WHERE username = '$username'";
			$resuft1 = mysqli_query($this->con,$qr1);
			$resuft = false;
			if (mysqli_num_rows($resuft1)==0) {
				$qr = "INSERT INTO $this->table  VALUES ('$hoten','$username','$password','$email','$phone')";
				if (mysqli_query($this->con,$qr)) {
					$resuft = true;
				}
			}
			else{
				$resuft = false;
			}
			return json_encode($resuft);
		}
		function checkuser($ursername){
			$qr = "SELECT id FROM user WHERE username = '$ursername'";
			$row = mysqli_query($this->con, $qr);
			$kq = false;
			if(mysqli_num_rows($row)>0) {
				$kq = true;
			}
			return json_encode($kq);
		}
		function checklogin($username,$password){
			$qr = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
			$row = mysqli_query($this->con, $qr);
			$resuft = mysqli_fetch_assoc($row);
			return $resuft;
		}
		function id_user($username){
			$qr = "SELECT * FROM user WHERE username ='$username'";
			echo $qr;
			$row = mysqli_query($this->con, $qr);
			$resuft = mysqli_fetch_assoc($row);
			return $resuft;
		}
		
	
	}
?>