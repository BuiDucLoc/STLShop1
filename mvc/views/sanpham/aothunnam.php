<?php 
	$b =  $data["sp"];
?>

	<div class="container-product-2 product1">
			<h2>
				<p>Tất cả sản phẩm</p>
			</h2>
			<div class="bottom-product">
		<?php 
			foreach ($b as $key) {
			$a = $key["image"];
			$id = $key["id"];
		?>
			
			<div class="col-md-4 product1">
				<div class="product-at">
					<!-- image -->
					<a href="<?php echo url("sanpham/detail/$id") ?>"><img class="img-responsive" src="<?php echo url("public/images/$a")?>"></a>
					<!-- description -->
					<?php echo $key["image"]?>
					<p class="tun"><?php echo $key["name_sp"] ?></p>
					<!-- price -->
					<a href="product/view/<?php echo $results[$temp]['id'] ?>" class="items-add">
						<p class="number item-price">
							<?php echo $key["gia"] ?>
						</p>
					</a>

				</div>
			</div>	
		<?php } ?>
			<div class="clear-fix"></div>	
		</div>


	</div>