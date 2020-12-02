<?php 
	class Admin_user extends DB{
		public function get_user($user_id){
			$qr = "SELECT * FROM user WHERE id ='$user_id'";
			$row = mysqli_query($this->con, $qr);
			$resuft = mysqli_fetch_assoc($row);
			return $resuft;
		}
	}
 ?>