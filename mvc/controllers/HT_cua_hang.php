<?php 
	class HT_cua_hang extends controller{
		public function __construct(){
			require_once"./mvc/link/lin.php";
			
		}
		public function Sayhi(){
			$this->teo = $this->views("Home",["pages"=>"he_thong_cua_hang"]);
		}
	}
 ?>