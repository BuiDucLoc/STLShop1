$(document).ready(function(){
	$("#username").keyup(function(){
		var user = $(this).val();
		$.post("../Ajax/checkuser",{un:user},function(data){
			if(data =='true'){
				$("#mess").html("ten dang nhap ton tai");
				$("#mess").css({"color":"red"});			}
			else{
				$("#mess").html("ten dang nhap hop le");
				$("#mess").css({"color":"#08e977"});
			}
		});
	});
});

