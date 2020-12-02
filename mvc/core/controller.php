<?php 
	class Controller{
		
		function model($model){
			require_once"./mvc/models/".$model.".php";
			return new $model;
		}
		function views($views,$data=[]){
			require_once"./mvc/views/".$views.".php";
		}
		
	}
 ?>