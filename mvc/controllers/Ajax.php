<?php 
	class Ajax extends controller{
		protected $usermodel;
		function __construct(){
			$this->usermodel=$this->model("usermodel");
		}
		function checkuser(){
			$un = $_POST["un"];
			echo $this->usermodel->checkuser($un);
		}
	}	
?>