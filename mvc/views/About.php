
	<form action="" method="GET">
		<input type="text" name="name" value=""></input>
		<input type="text" name="matkhau" value=""></input>
		<input type="submit" name="nop" value="gui"></input>
	</form>
	<?php if (isset($_GET["matkhau"])) {
		echo $_GET["matkhau"];
	}

	?>
				
				
	SELECT order_detail.*, hd_order.username, hd_order.email,hd_order.address,hd_order.phone,hd_order.ghichu,sanpham.name_sp FROM hd_order INNER JOIN order_detail ON order_detail.order_id = hd_order.id INNER JOIN sanpham on order_detail.id = sanpham.id WHERE order_detail.order_id = 33

