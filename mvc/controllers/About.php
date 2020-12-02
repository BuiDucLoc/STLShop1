<?php 
	class About extends controller{

		function __construct(){
			require_once"./mvc/link/lin.php";
		}
		function sayhi(){
			$this->views("Home",["pages"=>"gioithieu"]);
		}
		function chinh_sach_quy_dinh(){
			$this->views("Home",["pages"=>"chinh-sach-quy-dinh"]);
		}
		function chinh_sach_doi_tra(){
			$this->views("Home",["pages"=>"chinh-sach-doi-tra"]);
		}
		function chinh_sach_bao_mat(){
			$this->views("Home",["pages"=>"chinh-sach-bao-mat"]);
		}
		function a(){
			redirect_to("n");
		}

	}
?>