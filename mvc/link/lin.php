<?php 
	
		function redirect_to($string){
			header("location:".BASE_URL."$string");
			// echo BASE_URL;
		}
		function url ($tring){
			return BASE_URL."$tring";
		}
		// function redirect_to_alert($tring,$array = []){
		// 	header("location:".BASE_URL."$string");
		// }

 ?>