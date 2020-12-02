<?php 
	if (isset($data["sp"])) {
	$a = $data["sp"];
	foreach ($a as $key) {
	}
}
?>
<div class="container-product-1">
	<div class="sidebar">
		<div class="of-left">
			<h3 class="cate">Categories</h3>
		</div>
		<ul class="menu">
			<?php if (isset($data["cate"])) {
				$o = $data["cate"];
				foreach ($o as $key) : ?>
					<li class="items">
						<a class = "dropdown-btn1 " id="anchor" href=""><?php echo $key["name_categori"] ?><i class="fa fa-caret-down"></i></a>
						<ul class="subitems">
							<?php foreach ($data['sub_cate'] as $key1) : ?>
								<?php if($key['id'] == $key1['categori_id']){
										$id = $key1["id"];
									?>
									<li><a href="<?php echo url("sanpham/all/$id")?>" class="dropdown-btn1 hightlight" ><?= $key1['name_sub_cate']?></a></li>
								<?php } ?>
							<?php endforeach ?>
						</ul>
					</li>
				<?php endforeach;?>
			<?php } ?>
		</ul>
	</div>
<script type="text/javascript">

window.onclick = function(event){
	if(event.target.matches('#anchor')){
		event.preventDefault();
	}
}
</script>

