<?php
	
	if (isset($_SESSION["cart"])) {
		$cart = $_SESSION["cart"];
	}
	// echo "<pre>";
	// print_r($cart);
 ?>

<div class="main">
	<div class="container special clear-fix">
		<?php if(empty($cart)){ ?>
			<div class="alert">
				<p>&otimes; Giỏ hàng không có sản phẩm, vui lòng thực hiện lại !</p>
			</div>
			<h1 class="amount-of-cart">Giỏ hàng(0 sản phẩm)</h1>
			<div class="cart-empty">
				<img class="mascot-image" src="<?= url("public/images/cart.png")?>">
				<p class="messages">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
				<a href="<?php echo url("sanpham") ?>">Tiếp tục mua sắm</a>
			</div>
			<?php }else{?>
		<div class="check">
			<div>
				<h1 class="col-lg-6">Giỏ hàng(<?php if(!empty($cart)){ sort($cart);echo count($cart);} ?> sản phẩm)</h1>
				<div class="col-lg-6">
					<a href="<?php echo url("Cart/hoadon") ?>"><button type="button" class="btn btn-primary active btn-ls">Lịch sử mua hàng</button></a>
				</div>
			</div>
		
			<div class="cart-items border-cart">

			<?php  
				$i = 1;
				$total=0;
				$total_sp =0;
				foreach ($cart as $key) {
				
			?>
			<form method="POST" action="<?php echo url("Cart/update_cart/".$key["id"]) ?>">
				<div class="cart-header">
					<div>
						<input type="text" class="delete-cart close" value="<?php echo $i; ?>">

					</div>
					<div class="cart-sec">
						<a href="<?php echo url("sanpham/detail/".$key["id"]) ?>">
						<div class="cart-img"><img src="<?php echo url("public/images/".$key["image"]) ?>" class="img-responsive"></div>
						</a>
						<div class="cart-info">
							<h3><a href="<?php echo url("sanpham/detail/".$key["id"]) ?>"><?php echo $key['name']; ?></a></h3>
						
							<ul class="qty" style="margin-top: 3%;">
								<li style="margin-top: 0px!important"><p>Size: <?php echo $key["size"] ?></p></li>
								
								<li><p>Color: <?php echo $key["color"]; ?></p></li>
								<li style="margin-top: 0px!important"><p>SL: <?php echo $key['soluong']; ?></p></li>

								<li><input type="number" name="number" min ="1" value="<?php echo $key["soluong"] ?>"></li>
								<a href="<?php echo url("Cart/delete_cart/".$key["id"]) ?>"><button type="button" class="btn btn-danger a">Xóa</button></a>
								
							</ul>
						
							<ul>
								<input class="t" type="submit"name="update-cart" value="Cập nhật giỏ hàng">
							</ul>
						</form>
							<div class="delivery">
								<p>Price : <?php echo number_format($key['gia']).'₫'; 
								$total_sp =(floatval($key['gia'])*$key['soluong']);
								$total = $total + $total_sp;
								 ?></p>
								 <p style="margin-left: 15%;color:#dc3545;">Thành Tiền:<?php echo number_format($total_sp)."đ"; ?></p>
								<span>Delivery in 2-3 bussiness days</span>
							</div>
						</div>
						<div class="clear-fix"></div>
					</div>
				</div>
				<?php 	$i++;} ?>
			</div>
			
			
			<div class="cart-total">
				<a href="<?php echo url("sanpham")?>" class="order">Tiếp Tục Mua Sắm</a>
				<div class="price-details">
					<h3>Price Details</h3>
					<span>Total:</span>
					<span class="total1"><?php echo number_format($total).' ₫';  ?></span>
					<span>Discount:</span>
					<span class="total1">0</span>
					<span>Delivery charges:</span>
					<span class="total1">0</span>
					<div class="clear-fix"></div>
				</div>
				<ul class="total-price">
					<li class="last-price"><span>TOTAL:</span></li>
					<li class="last-price"><span class="price"><?php echo number_format($total).' ₫'; ?></span></li>
					<div class="clear-fix"></div>
				</ul>
				
				
				<a href="<?php echo url("Cart/user") ?>"><input name="add-into-bill" class="order" type="submit" value="Đặt Hàng"></input></a>
			</div>
		
		
			<div class="clear-fix"></div>
		<?php } ?>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$(".delete-cart").click(function(){
			var c = $(this).val();
			$.ajax({
				url:"./ajax/delete_cart",
				type:"post",
				data:"pos="+c,
				async:true,
				success:function(){
					window.location.reload();
				}
			});
			return true;
		});
	});
</script>