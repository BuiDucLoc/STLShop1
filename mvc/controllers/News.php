<?php 
	class News extends controller{
		function __construct(){
			require_once"./mvc/link/lin.php";
			$this->models = $this->model("newmodel");
		}
		function Sayhi(){
			$new = $this->models->get_new();
			$this->views("Cart",["pages"=>"New","new"=>$new]);
		}
	}
 ?>