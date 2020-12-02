<?php
	
	$dt = $data['sp_detail'];
	 foreach ($dt as $key) {
	 	$image = $key["image"];
	 	$name = $key["name_sp"];
	 	$mota = $key["mota"];
	 	$gia = $key["gia"];
	 }
 ?>
 <div class="product-price">
<div class="single-top">
				<div class="slideshow-gallery">
					
					<div class="">
						<img src="<?php echo url("public/images/$image") ?>" width="100%">
					</div>
					<a href="prev"></a>
					<a href="next"></a>		
				</div>

				<div class="row1">

					<div class="column1">
						<img onclick="currentSlide(1)" class="demo cursor" src="<?php echo url("public/images/$image") ?>" width="100%">
					</div>

					<div class="column1">
						<img onclick="currentSlide(2)" class="demo cursor" src="<?php echo url("public/images/$image") ?>" width="100%">
					</div>

					<div class="column1">
						<img onclick="currentSlide(3)" class="demo cursor" src="<?php echo url("public/images/$image") ?>" width="100%">
					</div>

					<div class="column1">
						<img onclick="currentSlide(4)" class="demo cursor" src="<?php echo url("public/images/$image") ?>" width="100%">
					</div>
					
				</div>
</div>


<div class="single-para">
				<form action="<?php echo url("Cart/detail/".$key["id"]) ?>" method="POST" accept-charset="utf-8">
	
					<h4><?php echo $name ?></h4>
					<h5 class="item_price"><?php echo $gia.'₫' ?></h5>
					<p><?php echo $mota ?></p>
					<div class="available">
						<ul>
							<li> Màu sắc:
								<select name="color">
									<option>Đỏ</option>
									<option>Đen</option>
									<option>Hồng</option>
									<option>Xám</option>
								</select>
							</li>
							<li class="size-in"> Kích cỡ:
								<select name="size">
									<option>XL</option>
									<option>L</option>
									<option>M</option>
									<option>S</option>
								</select>
							</li>
							<li>
								Số lượng:
								<input type="number" name="number" autocomplete="off" step="1" min="1" max="<?php echo $key["soluong"] ?>"value="1" >
							<li style="color: red;">số lượng hiện có:<?php echo $key["soluong"]; ?></li>
							<!-- <button class="add-cart">thêm vào giỏ hàng</button> -->
							<button class="add-cart" type="submit" name="call-cart">Thêm vào giỏ hàng</button>
							<button class="add-cart buy" type="submit" name="buy-now">Mua Hàng</button>
							</li>
					</forms>

					

							<div class="clear-fix"></div>
						</ul>

					</div>
					<!-- <input type="hidden" name="id" value="<?php echo $row[0]['id'] ?>">
					<input type="hidden" name="name" value="<?php echo $row[0]['name'] ?>">
					<input type="hidden" name="image" value="<?php echo $image_list[0] ?>">
					<input type="hidden" name="price" value="<?php echo $row[0]['price'] ?>"> -->
					<!-- <?php if($count_number > 0){ ?>
					<button class="add-cart" type="submit" name="call-cart">Thêm vào giỏ hàng</button>
					<button class="add-cart buy" type="submit" name="buy-now">Mua Hàng</button>
				<?php }else{} ?> -->

					
</div>

<div class="clear-fix"></div>


<div class="tabs">
				<!-- <nav>
					<ul class="tabs-navigation">
						<li><a  data-content = "fashion" href="#" id = "tablink">Description</a></li>
						<li><a  data-content = "cinema" href="#" id = "tablink">Additional Information</a></li>
						<li><a class="selected"  data-content = "television" href="#" id = "tablink">Review(<?php echo $count; ?>)</a></li>
					</ul>

					<ul class="tabs-content">
						<li data-content = "fashion" class="tabct" id="a">
							<div class="facts">
								<p><?php echo $row[0]['description'] ?></p>
							</div>
						</li>

						<li data-content = "cinema" class="tabct" id="b">
							<div class="facts1">
								<div class="color">
									<p>Color</p>
									<span>Blue Black Red</span>
									<div class="clear-fix"></div>
								</div>
								<div class="color">
									<p>Size</p>
									<span>S,M,L,XL</span>
									<div class="clear-fix"></div>
								</div>
							</div>
						</li>

						<li data-content = "television" class="selected" id="c">
							<?php if($count > 0){
								for ($i = 0; $i < count($list_comment);$i++) {?>
							<div class="comment-top">

								<div class="comment-left">
									<p class="avatar-comment">T</p>
								</div>
								
								<div class="comment-right">
									
									<h6><a href="#"><?php echo $list_comment[$i]['name'] ?></a>
										<?php $date = date_create($list_comment[$i]['created']); ?>
										<span>Ngày Đăng : <?php echo date_format($date, 'd-m-Y') ?></span>
									</h6>
									<p><?php echo $list_comment[$i]['content'] ?></p>	
									
								</div>
								
								<div class="clear-fix"></div>	
							</div>
							<?php } }else{?>
									<p class="empty-comment">Không có bình luận nào...</p>
									
								<?php } ?>			
							<div class="comment-place">
									
									<?php if(isset($_SESSION['user'])){ ?>
									<form action="product/view/<?php echo $row[0]['id'] ?>" method="POST">
										<textarea style="overflow-y: visible;" placeholder="Nhập bình luận..." name="content"></textarea>
										<button class="add-review" name="">Add Review</a>
									</form>
										
									<?php }else{ ?>
										<p>Bạn cần đăng nhập để bình luận...</p>
									<?php } ?>
								</div>
						</li>
					</ul>
				</nav> -->
				<div class="clear-fix"></div>
			</div>
</div>

			<script>
    	jQuery(document).ready(function($){
		var tabItems = $('.tabs-navigation a'),
		tabContentWrapper = $('.tabs-content');

		tabItems.on('click', function(event){
		event.preventDefault();
		var selectedItem = $(this);
		if( !selectedItem.hasClass('selected') ) {
			var selectedTab = selectedItem.data('content'),
				selectedContent = tabContentWrapper.find('li[data-content="'+selectedTab+'"]'),
				selectedContentHeight = selectedContent.innerHeight();
			
			tabItems.removeClass('selected');
			selectedItem.addClass('selected');
			selectedContent.addClass('selected').siblings('li').removeClass('selected');
			//animate tabContentWrapper height when content changes 
			tabContentWrapper.animate({
				'height': selectedContentHeight
			}, 200);
		}
	});
});
    </script>