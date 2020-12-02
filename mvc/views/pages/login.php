

<div class="main-login">
			<div class="container special">
				<div class="container-inner">
						<div class="roww">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div id="content">
								<h1>Đăng nhập hệ thống</h1>
								<div class="login-content">
									<div class="roww">
										<div class="col-lg-6 col-sm-6 ">
											<div class="inner">
											<h2>Khách hàng mới</h2>
												<div class="content1">
													<p>Bằng cách tạo một tài khoản bạn sẽ có thể mua sắm nhanh hơn, được cập nhật về tình trạng một đơn đặt hàng, và theo dõi các đơn đặt hàng bạn đã thực hiện trước đó.</p>
													<a href="<?php echo url("user/dangki") ?>" class="btn-register">Đăng ký</a>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-sm-6 ">
											<div class="inner">
											<h2><?php if(isset($data["kq"])) {
												echo "đăng nhập thất bại";
												}
											?></h2>
											<h2>Đăng nhập</h2>
												<form method="POST" action="<?php echo url("user/dangnhap") ?>" class="f">
													<ul>
														<li><input class="tb" type="text" name="email" id="email" placeholder="Email*"  value="<?php if(isset($_COOKIE["user"])){echo $_COOKIE["user"];} ?>" required>
														<span class="error"></span>
														</li>
														<li><input class="tb" type="password" name="password" placeholder="Password*" autocomplete="off" value="<?php if(isset($_COOKIE["pass"])){echo $_COOKIE["pass"];} ?>" required></li>
														<p><input type="checkbox" name="checkbox" value="on">
														Nhớ mật khẩu</p>
														<li><input name ="dangnhap" class="btn-submit" type="submit" name="submit" value="Đăng nhập"></li>

													</ul>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>						
							<div></div>
						</div>		
				</div>
			</div>	
			
	