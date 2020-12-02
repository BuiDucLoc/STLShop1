<?php 
	class Home extends controller{
		public $teo;
		function __construct(){
			$this->teo = $this->model("sinhvienmodel");
			require_once"./mvc/link/lin.php";
			if (isset($_SESSION["level"])) {
				$this->check_admin();
			}
		}
		function check_admin(){
			if ($_SESSION["level"]==1) {
				redirect_to("Admin");
			}
		}
		function Sayhi(){
			$this->views("Home",["pages"=>"noidung"]);
		
		}
		function show($a){
			$a = $this->teo->laytatca();
			echo [
				'data'=>$a
			];
		}
	}
	 // 	 function show($a){
		// 	$kq = $this->teo->layid($a);
		// 	print_r($kq);
		// 	$this->views("demo",["sv"=>$kq]);
	 // 		// $resuft = $this->teo->laysv();

		// 	// while ($a = mysqli_fetch_array($resuft)) {
		// 	// 	print_r($a);
	 // 		// }
	 // 	}
	 // 	function tinhtong($c,$d){
		//  $this->teo->tong($c,$d);

	 // 	}
	 // 	function d(){
		// 	// redirect_to("home/show/1");
	 // 		url("home");	
	 // 	}
	 // 	function ha($id){
	 // 		// $this->teo->update($a);
	 // 		$arr = [
		// 		"hoten" => $_POST["hoten"],
	 // 			"namsinh" => $_POST["namsinh"]
		// 	];
	 // 		print_r($arr);
		// 	$this->teo->update_sv($id,$arr);
		// }
		// function hiensinhvien(){
	 // 		$ds = $this->teo->laytatca();
	 // 		$this->views("xoa",["ds"=>$ds,"tb"=>"table"]);
	 // 	}
	 // 	function xoa($id){
	 // 		if($this->teo->delete($id)==1){
	 // 			echo "thanh cong";
	 // 			redirect_to("home/hiensinhvien");
	 // 		}
	 // 		else{
	 // 			echo "thatbai";
 	// 	}
			
	 // 	}
	 // 	function themsv(){
		// 	$ds = $this->teo->laytatca();
	 // 		$this->views("xoa",["ds"=>$ds,"tb"=>"forn"]);
	 // 	}
 	// 	function insert(){
	 // 		$arr=[
	 // 			"hoten" => $_POST["hoten"],
	 // 			"namsinh" => $_POST["namsinh"]
		// 	];
	 // 		// if ($this->teo->insert1($arr)) {
	 // 		// 	echo "thanh cong";
	 // 		// }
		// 	// else{
		// 	// 	echo "that bai";
		// 	// }
		// 	$this->teo->insert1($arr);
		// 	redirect_to("home/hiensinhvien");
		// } 
?>

 