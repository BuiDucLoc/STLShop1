<?php 
	class newmodel extends DB{
		function get_new(){
			$qr = "SELECT news.*,user.hoten FROM news INNER JOIN user ON news.user_id = user.id";
			$row = mysqli_query($this->con, $qr);
			$a = mysqli_fetch_all($row,MYSQLI_ASSOC);
			return $a;
		}
	}
 ?>