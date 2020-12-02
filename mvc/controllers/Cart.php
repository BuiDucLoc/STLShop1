<?php
	class Cart extends Controller{
		public $models;
		public $teo;
		public function __construct(){
			$this->models = $this->model("cartmodel");
			$this->teo = $this->model("usermodel");
			$this->models1 = $this->model("sanphammodel");
			require_once"./mvc/link/lin.php";
		}
		public function detail($id){
			// session_destroy();exit();
			$a = $this->models->get_sp($id);
			$a = $this->models1->get_categori();
			$n = $this->models1->get_subcategori();
			foreach ($a as $key) {
			}
			if (isset($_POST["buy-now"])) {
				if (isset($_SESSION["cart"])) {
					if (isset($_SESSION["cart"][$id])) {
							$_SESSION["cart"][$id]["soluong"]+=$_POST["number"];
							
					}
					else{
								$_SESSION["cart"][$id]["soluong"] =$_POST["number"];
								$_SESSION["cart"][$id]["name"] = $key["name_sp"];
								$_SESSION["cart"][$id]["gia"] = $key["gia"];
								$_SESSION["cart"][$id]["image"] = $key["image"];
								$_SESSION["cart"][$id]["id"] = $id;
								$_SESSION["cart"][$id]["size"] = $_POST["size"];
								$_SESSION["cart"][$id]["color"] = $_POST["color"];
								
					}
				}
				else
					{
						$_SESSION["cart"][$id]["soluong"] = $_POST["number"];
						$_SESSION["cart"][$id]["name"] = $key["name_sp"];
						$_SESSION["cart"][$id]["gia"] = $key["gia"];
						$_SESSION["cart"][$id]["image"] = $key["image"];
						$_SESSION["cart"][$id]["id"] = $id;
						$_SESSION["cart"][$id]["size"] = $_POST["size"];
						$_SESSION["cart"][$id]["color"] = $_POST["color"];
						

				}
			}
			$this->views("Cart",["pages"=>"cart1","cate"=>$a,
				"sub_cate"=>$n]);
		}
		public function delete_cart($id){
			if ($_SESSION["cart"][$id]) {
				unset($_SESSION["cart"][$id]);
				redirect_to("Cart/detail/1");
			}

		}
		public function update_cart($id){
			$_SESSION["cart"][$id]["soluong"]=$_POST["number"];
			redirect_to("Cart/detail/1");
		}
		public function xuly(){
			if (isset($_SESSION["username"])) {
				redirect_to("Cart/thanhtoan");
			}
			else{
				redirect_to("User/Sayhi");
			}
		}
		public function user(){
			if (isset($_SESSION["username"])) {
					$id_user = $_SESSION["id"];
					$get_user = $this->models->get_user($id_user);
					$this->views("Cart",["pages"=>"thanhtoan","get_user"=>$get_user]);
				}
			else{
					$this->views("Cart",["pages"=>"taikhoan"]);
				}
			}
		public function Sayhi(){

		}
		public function login(){
			if (isset($_POST["dangnhap"])) {
				$email = $_POST["email"];
				$password=$_POST["password"];
				$check = $this->teo->checklogin($email,$password);				
					if ($check!="") {
						$_SESSION["username"]=$check["username"];
						$_SESSION["id"] = $check["id"];
						$get_user = $this->models->get_user($check["id"]);
						if (isset($_POST["checkbox"])) {
							setcookie("user",$check["username"],time()+3600,'/','',0,0);
							setcookie("pass",$check["password"],time()+3600,'/','',0,0);
						}
						$check="đang nhập thành công";
						$this->views("Cart",["pages"=>"thanhtoan","kq"=>$check,"alert_status"=>"success","get_user"=>$get_user]);
					}
					else{
						$check ="dang nhap that bai";
						$this->views("Cart",["pages"=>"taikhoan","kq"=>$check,"alert_status"=>"danger"]);
					}
				 }
		}
		public function dangki(){
			if (isset($_POST["submit"])) {
					$name = $_POST["name"]; 
					$username = $_POST["username"];
					$password = $_POST["password"];
					$confirmpassword = $_POST["confirmPassword"];
					if ($password != $confirmpassword) {
						$check = "đang kí thất bại";
						$this->views("Cart",["pages"=>"taikhoan","kq"=>$check,"alert_status"=>"danger"]);
						die();
					}
					$email = $_POST["email"];
					$phone = $_POST["phone"];
					$check ="đăng kí thành công vui lòng đăng nhập";
					$this->views("Cart",["pages"=>"taikhoan","kq"=>$check,"alert_status"=>"success"]);
				}
				else{
					redirect_to('user/dangki');
				}
		}
		public function order(){
			if (isset($_POST["order"])) {
				date_default_timezone_set('Asia/Ho_Chi_Minh');
				$user_id = $_SESSION["id"];
				$username = $_POST["name"];
				$email = $_POST["email"];
				$address = $_POST["address"];
				$phone = $_POST["phone"];
				$ghichu = $_POST["ghichu"];
				$date_order = date("Y-m-d H:i:s");
				$kq = $this->models->inser_order($user_id,$username,$email,$address,$phone,$ghichu,$date_order);
				if ($kq ==1) {
					$check = "Mua hàng thành công";
				}
				else{
					$check="Mua hàng thất bại";
				}
				$a = $this->models->get_order_detail($_SESSION["last_id"]);
				$check ="mua hàng thành công!";
				unset($_SESSION["cart"]);
				$this->views("Cart",["pages"=>"hoadon","get_detail"=>$a,"kq"=>$check,"alert_status"=>"success"]);
			}
		}
		public function lich_su_mua_hang(){
			if (isset($_SESSION["username"])) {
					$get_order = $this->models->get_order($_SESSION["id"]);
					$this->views("Cart",["pages"=>"lich_su","get_order"=>$get_order]);
				}
			else{
					$this->views("Cart",["pages"=>"login"]);
				}
		}
		public function detail_lich_su_mua_hang($id_order){
			$a = $this->models->get_order_detail($id_order);
			$this->views("Cart",["pages"=>"hoadon","get_detail"=>$a]);
		}
	}
 ?>