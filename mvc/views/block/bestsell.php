<div class="product-bottom">
	<div class="of-left">
		<h3 class="best"><a href="product/bestSaller/">Best seller</a></h3>
	</div>
	<?php foreach ($data["sp_3"] as $key){?>
		<div class="product-go">
			<div class="fashion-grid">
				<a href="<?php echo url("sanpham/detail/".$key["id"]."") ?>"><img class="img-responsive" src="<?php echo url("public/images/".$key["image"]."") ?>"></a>
			</div>
			<div class="fashion-grid1">
				<h6 class="best2">
					<a href="<?php echo url("sanpham/detail/".$key["id"]."")?>"><?php echo $key["name_sp"] ?></a>	
				</h6>
				<span class="price-in"><?php echo $key["gia"].'.đ'?></span>
			</div>
			<div class="clearfix"></div>
		</div>
	<?php } ?>
</div>