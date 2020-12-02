<?php
	// echo "<pre>"; 
 // 	print_r($_SESSION["cart"]); 
foreach ($data["get_user"] as $key) {
	
}
 ?>
<h3 class="text-thanhtoan">Vui lòng điền thông tin để giao hàng!</h3>
<div class="main">
	<div class=" col-lg-10 offset-lg-1 special clear-fix">
	
		<div class="login-to-buy" style="border:1px solid #C4C3C3;background: #F8F8F8;border-radius: 4px;">
			
				<form action="<?php echo url("Cart/order") ?>" method="POST">
					<div class="submit-order clear-fix">
						<div class="submit-order-left e">
							<h2>Thông tin giao hàng</h2>
							<span>Tên người mua:</span>
					    	<input type="text" name="name" placeholder="Nhập tên bạn"autocomplete="off" value="<?php echo $key["hoten"] ?>" required></input>
					    	<span>Email:</span>
					    	<input type="text" name="email" placeholder="Nhập email"autocomplete="off" value="<?php echo $key["email"] ?>" required></input>
							<span>Nhập địa chỉ giao hàng:</span>
							<input type="text" name="address" placeholder="Nhập địa chỉ"autocomplete="off" required></input>
							<span>Phone:</span>
							<input type="text" name="phone" placeholder="Nhập phone của bạn" autocomplete="off" value="<?php echo $key["phone"] ?>" required></input>
							<span>Ghi chú:</span>
							<textarea type="text" name="ghichu" cols="75" rows="5" name="phone" placeholder="Nhập ghi chú của bạn" autocomplete="off" required></textarea>
							<input class="gdh"type="submit" name="order" value="Gởi đơn hàng">
								
						</div>

						<div class="submit-order-right">
							
						</div>
					
					</div>	

				</form>
				<?php if (isset($_POST["order"])) {
					echo $_POST["name"];
				} ?>
			
			<div class="clear-fix"></div>
		</div>
		<?php 
			$total = 0;
		 ?>
		<div class="infor-product-buy">
			<div class="info-detail">
				<ul>
				<li>
					<h3 class="tt">Đơn Hàng(<?php echo count($_SESSION['cart']); ?> Sản Phẩm)</h3>
					<a href="<?php echo url("Cart/detail/1") ?>">Edit</a>
					<div class="clear-fix"></div>
				</li>
				<li>
				<?php foreach ($_SESSION["cart"] as $key) { ?>
					
						<div>
							<h3 class="tt">
								<?php echo $key["soluong"].""?>
								<a href=""><?php echo $key["name"] ?></a>
								
							</h3> 
						<span>
							<?php 
								$total_sp =($key['gia']*$key['soluong']);
								echo number_format($total_sp)."đ";
								echo "<br>";
								$total = $total + $total_sp;
							?>
						</span>
						</div>
					<div class="clear-fix"></div>
					<?php echo "<br>"; ?>
				<?php } ?>
				</li>
				<li>
					<h3>Tạm Tính:</h3>
					<span><?php echo number_format($total).' ₫'; ?></span>
					<div class="clear-fix"></div>
				</li>
				<li>
					<h3>Thành Tiền:</h3>
					<span><?php echo number_format($total).' ₫'; ?>
					</span>
					<div class="clear-fix"></div>
				</li>
			</ul>
			</div>
		</div>
		<div class="clear-fix"></div>
