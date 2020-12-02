<?php 
	class sanphammodel extends DB{
		function getsanpham($id){
			$qr = "SELECT * FROM sub_categori INNER JOIN sanpham on sub_categori.id = sanpham.sub_categori_id WHERE sub_categori_id = $id";
			$row = mysqli_query($this->con,$qr);
			$a = mysqli_fetch_all($row, MYSQLI_ASSOC);
			return $a;
		}
		function get_categori(){
			$qr = "SELECT * FROM categori";
			$row = mysqli_query($this->con, $qr);
			$a = mysqli_fetch_all($row, MYSQLI_ASSOC);
			return $a;
		}
		function get_subcategori(){
			$qr = "SELECT * FROM sub_categori";
			$row = mysqli_query($this->con, $qr);
			$a = mysqli_fetch_all($row, MYSQLI_ASSOC);
			return $a;
		}
		function get_detail_sanpham($id1){
			$qr = "SELECT * FROM sanpham WHERE id = $id1";
			$row = mysqli_query($this->con,$qr);
			$a = mysqli_fetch_all($row, MYSQLI_ASSOC);
			return $a;
		}
		function detail_3(){
			$qr = "SELECT * FROM sanpham ORDER BY id DESC LIMIT 3";
			$row = mysqli_query($this->con,$qr);
			$a = mysqli_fetch_all($row,MYSQLI_ASSOC);
			return $a;
		}
		function getall(){
			$qr = "SELECT * FROM sanpham";
			$row = mysqli_query($this->con,$qr);
			$resuft = mysqli_fetch_all($row,MYSQLI_ASSOC);
			return $resuft;
		}

	}
 ?>