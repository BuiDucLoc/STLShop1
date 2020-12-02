<?php 
	class sanpham extends controller{
		public $models;
		function __construct(){
			require_once"./mvc/link/lin.php";
			$this->models = $this->model("sanphammodel");
		}
		function sayhi(){
			$all = $this->models->getall();
			$detail_3 = $this->models->detail_3();
			$a = $this->models->get_categori();
			$n = $this->models->get_subcategori();
			$this->views("SanPham",
				[
				"sanpham"=>"sanpham",
				"cate"=>$a,
				"sub_cate"=>$n,
				"sp_3"=>$detail_3,
				"all"=>$all
			]);
		}
		function all($id){
			$detail_3 = $this->models->detail_3();
			$b = $this->models->getsanpham("$id");
			$a = $this->models->get_categori();
			$n = $this->models->get_subcategori();
			$this->views("SanPham",
				[
					"sanpham"=>"aothunnam",
					"sp"=>$b,
					"cate"=>$a,
					"sub_cate"=>$n,
					"sp_3"=>$detail_3
				]);
			
		}
		function detail($id){
			$detail_3 = $this->models->detail_3();
			$detail = $this->models->get_detail_sanpham("$id");
			$a = $this->models->get_categori();
			$n = $this->models->get_subcategori();
			$this->views("SanPham",
				[
					"sanpham"=>"detail",
					"cate"=>$a,
					"sub_cate"=>$n,
					"sp_detail"=>$detail,
					"sp_3"=>$detail_3
				]);
		}
		function test(){
			print_r();
		}
		
	}
?>