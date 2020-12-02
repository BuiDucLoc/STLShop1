<?php 
	class User extends controller{
		public $models;
		public $teo;
		function __construct(){
			$this->models = $this->model("cartmodel");
			$this->teo = $this->model("usermodel");
			require_once"./mvc/link/lin.php";
		}
		function Sayhi(){

			$this->views("Home",["pages"=>"login"]);
		}
		function dangki(){
		
			$this->views("Home",["pages"=>"register"]);
		}
		function dulieudangki(){
		
				if (isset($_POST["submit"]) && $_POST["name"]!= ''&& $_POST["username"]!='' && $_POST["password"]!='' &&$_POST["confirmPassword"] && $_POST["email"]!="" && $_POST["phone"]!="") {
					$name = $_POST["name"]; 
					$username = $_POST["username"];
					$password = $_POST["password"];
					$confirmpassword = $_POST["confirmPassword"];
					if ($password != $confirmpassword) {
						$check = "đang kí thất bại";
						$this->views("Home",["pages"=>"register","kq"=>$check,"alert_status"=>"danger"]);
						die();
					}

					$email = $_POST["email"];
					$phone = $_POST["phone"];
					$check = $this->teo->insert($name,$username,$password,$email,$phone);
					$check ="đăng kí thành công vui lòng đăng nhập";
					$this->views("Home",["pages"=>"login","kq"=>$check,"alert_status"=>"success"]);
				}
				else{
					redirect_to('user/dangki');
				}
		}
		function dangnhap(){
				if (isset($_POST["dangnhap"])) {
				$email = $_POST["email"];
				$password=$_POST["password"];
				$check = $this->teo->checklogin($email,$password);
					if ($check!="") {
						$_SESSION["username"]=$check["hoten"];
						$_SESSION["id"]=$check["id"];
						$_SESSION["level"]=$check["lever"];
						$get_user = $this->models->get_user($check["id"]);
						if (isset($_POST["checkbox"])) {
							setcookie("user",$check["username"],time()+3600,'/','',0,0);
							setcookie("pass",$check["password"],time()+3600,'/','',0,0);
						}
						redirect_to("Home");
					}
					else{
						$check ="dang nhap that bai";
						$this->views("Home",["pages"=>"login","kq"=>$check,"alert_status"=>"danger"]);
					}
				 }
		}
		function dangxuat(){
			session_destroy();
			redirect_to("Home");
		}
	}
?>