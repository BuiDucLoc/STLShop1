<?php 
$total = 0;
foreach ($data["get_detail"] as $key) {
	$total = $total + ($key["soluong"]*$key["price"]);
 } 
?>
<div class="container-fluid">
	<div style="text-align:center; padding-top: 4%!important;
    padding-bottom: 8%!important;">
		<ul class="text_a">
			<li>
				Họ Và Tên:
				<span><?php echo $key["username"] ?></span>
			</li>
			<li>
				Email:
				<span><?php echo $key["email"] ?></span>
			</li>
			<li>
				SĐT:
				<span><?php echo $key["phone"] ?></span>
			</li>
			<li>
				Địa Chỉ:
				<span><?php echo $key["address"] ?></span>
			</li>
			<li>
				Ghi chú KH:
				<span><?php echo $key["ghichu"] ?></span>
			</li>
		</ul>



 <table class="table table-striped table-form">
  <thead>
    <tr>
      
      <th scope="col">TÊN SẢN PHẨM</th>
      <th scope="col">SỐ LƯỢNG</th>
      <th scope="col">GIÁ</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data["get_detail"] as $key) {?>
	    <tr>
	      <td style="font-size: small;"><?php echo $key["name_sp"] ?></td>
	      <td style="font-size: small;"><?php echo $key["soluong"] ?></td>
	      <td style="font-size: small;"><?php echo number_format($key["price"]).'đ' ?></td>
	    </tr>
    <?php } ?>
  </tbody>
</table>
<?php  ?>
<li>
	Tổng:<?php echo number_format($total).'đ'?>
</li>
	</div>
</div>