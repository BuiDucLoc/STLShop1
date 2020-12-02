<?php 
	class cartmodel extends DB{
		public function get_sp($id1){
			$qr = "SELECT * FROM sanpham WHERE id = $id1";
			$row = mysqli_query($this->con,$qr);
			$a = mysqli_fetch_all($row, MYSQLI_ASSOC);
			return $a;
		}
		public function get_user($id2){
			$qr = "SELECT * FROM user WHERE id = $id2";
			$row = mysqli_query($this->con,$qr);
			$a = mysqli_fetch_all($row, MYSQLI_ASSOC);
			return $a;
		}
		public function inser_order($userid,$username,$email,$address,$phone,$ghichu,$date_order){
			$qr ="INSERT INTO hd_order (user_id,username,email,address,phone,ghichu,date_order) 
					VALUES('$userid','$username','$email','$address','$phone','$ghichu','$date_order')";
			if (mysqli_query($this->con, $qr)) {
				$last_id = mysqli_insert_id($this->con);
				$_SESSION["last_id"] = $last_id;
				foreach ($_SESSION["cart"] as $key) {
					$sanphamid = $key["id"];
					$price = $key["gia"];
					$soluong = $key["soluong"];
					$total = $key["gia"]*$key["soluong"];
					date_default_timezone_set('Asia/Ho_Chi_Minh');
					$date_order = date("Y-m-d H:i:s");
					$qr1 = "INSERT INTO order_detail (order_id,sanpham_id,price,soluong,total,date_order_details) 
					VALUES('$last_id','$sanphamid','$price','$soluong','$total','$date_order')";
					mysqli_query($this->con,$qr1);
				}
				return 1;
			}
			else{
				return 0;
			}
	}
	public function get_order_detail($order_id){
		$qr1 = "SELECT hd_order.username,hd_order.email,hd_order.address,hd_order.phone,hd_order.ghichu, order_detail.*,sanpham.name_sp FROM hd_order INNER JOIN order_detail ON hd_order.id = order_detail.order_id INNER JOIN sanpham on order_detail.sanpham_id = sanpham.id WHERE order_id =$order_id";
		$row = mysqli_query($this->con, $qr1);
		$a = mysqli_fetch_all($row,MYSQLI_ASSOC);
		return $a;		
	}
	public function get_order($user_i){
		$qr = "SELECT * FROM hd_order WHERE user_id=$user_i";
		$row = mysqli_query($this->con, $qr);
		$a = mysqli_fetch_all($row,MYSQLI_ASSOC);
		return $a;
	}
	
}
?>