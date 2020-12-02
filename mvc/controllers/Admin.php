<?php 
	class Admin extends controller{
		function __construct(){
			$this->models = $this->model("Admin_user");
			require_once"./mvc/link/lin.php";
			$this->check_admin();
		}
		function check_admin(){
			if ($_SESSION["level"]!=1) {
				redirect_to("Home");
			}
		}
		function dangxuat(){
			session_destroy();
			redirect_to("Home");
		}
		function sayhi(){
			$user_id = $_SESSION["id"];
			$user = $this->models->get_user($user_id);
			$this->views("Admin",["pages"=>"noidung","user"=>$user]);
		}

}
 ?>