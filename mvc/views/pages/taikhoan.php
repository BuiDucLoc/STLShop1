

<div class="main">
	<div class="container-fluid special clear-fix">
	
		<div class="login-to-buy" style="border:1px solid #C4C3C3;background: #F8F8F8;border-radius: 4px;">
			<div class="tab">
					<a class="tab-link" onclick="openTab(event, 'login')" id="default-open">
						<span>Đăng Nhập</span>
						<i>Đã Là Thành Viên TSLShop</i>	
					</a>
							
					<a class="tab-link" onclick="openTab(event,'register')">
						<span>Đăng Ký</span>
						<i>Dành Cho Thành Viên Mới</i>	
					</a>
							
				<div class="clear-fix"></div>
			</div>
			
			<div class="content-tab" id="login" >
				<form action="<?php echo url("Cart/login") ?>" method="POST">
					<span>Email:</span>
					<input type="text" name="email" placeholder="Nhập Email" value="<?php if(isset($_COOKIE["user"])){echo $_COOKIE["user"];} ?>" required>
						<span>Mật khẩu:</span>
					<input type="password" name="password" placeholder="Nhập Mật Khẩu" value="<?php if(isset($_COOKIE["pass"])){echo $_COOKIE["pass"];} ?>" required>
					<p><input type="checkbox" name="checkbox" value="on">Nhớ mật khẩu</p>
					<button type="submit" name="dangnhap">Đăng Nhập</button>
					<input type="hidden" name="pointer-login-to-buy">
				</form>
			</div>
			
			<div class="content-tab" id="register">
				<form action="<?php echo url("Cart/dangki") ?>" method="POST">
					<span>Họ và Tên:</span>
					<input type="text" name="name" placeholder="Nhập Họ Tên..." autocomplete="off" value = "" required>
					<span>Tên đăng Nhập:</span>
					<input id="username" type="text" name="username" placeholder="Username..." autocomplete="off" value = "" required>
					<div id="mess"></div>
					<span>Password:</span>
					<input type="password" name="password"  placeholder="Password" required >
					<span>Confirm password:</span>
					<input type="password" name="confirmPassword" autocomplete="off"  placeholder="Confirm Password..." required>
					
					<span>Email:</span>
					<input type="text" name="email" value="" autocomplete="off"  placeholder="Email..." required>
					<span>Phone:</span>
					<input type="text" name="phone" value="" autocomplete="off"  placeholder="Phone..." required>
					
					
					
					<button type="submit" name="submit">Đăng Ký</button>
					<input type="hidden" name="pointer-register-to-buy">
				</form>
			</div>
			<div class="clear-fix"></div>
		</div>
		<?php 
			$total = 0;
		 ?>
		<div class="infor-product-buy">
			<div class="info-detail">
				<ul>
				<li>
					<h3>Đơn Hàng(<?php echo count($_SESSION['cart']); ?> Sản Phẩm)</h3>
					<a href="<?php echo url("Cart/detail/1") ?>">Edit</a>
					<div class="clear-fix"></div>
				</li>
				<li>
				<?php foreach ($_SESSION["cart"] as $key) { ?>
					
						<div>
							<h3>
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
<!-- Gọi file footer -->
<script type="text/javascript">
	function openTab(evt, name){
		var i, tablinks, tabContent;
		tabContent = document.getElementsByClassName('content-tab');
		for(i = 0; i < tabContent.length; i++){
			tabContent[i].style.display = 'none';
		}
		tablinks = document.getElementsByClassName('tab-link');

		for(i = 0; i < tablinks.length; i++){
			 tablinks[i].className = tablinks[i].className.replace(" active1", "");
		}
		document.getElementById(name).style.display = 'block';
		evt.currentTarget.className += " active1";
	}
	document.getElementById('default-open').click();
</script>