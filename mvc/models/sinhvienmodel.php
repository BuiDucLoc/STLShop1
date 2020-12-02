<?php 
	class sinhvienmodel extends DB{
		protected $table = "sinhvien";
		protected $update_cot;
		protected $inset = "sinhvien(hoten,namsinh)";
		protected $value;
		function Getsv(){
			echo "lay sinh vien";
		}
		function tong($a,$b){
			return $a+$b;
		}
		function update_sv($id,$arr){
			$hoten = $arr["hoten"];
			$namsinh = $arr["namsinh"];
			$this->update_cot = "hoten = '$hoten',namsinh = '$namsinh'";
			$this->update($id);
		}

		Function insert1($arr){
			$hoten = $arr["hoten"];
			$namsinh = $arr["namsinh"];
			$this->value = "('$hoten','$namsinh')";
			$this->insert2();
		}
	}
 ?>