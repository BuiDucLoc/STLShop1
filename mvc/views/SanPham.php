<!--Gọi file header.php-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
		require('./mvc/views/block/header.php');
?>
<!--  -->
<!-- <p class="header">IT'S GOOD TO SEE YOU</p> -->

<!-- Gọi file menu -->
<?php 
	require('./mvc/views/block/navBar.php');
?>

<!-- start slideshow -->
<?php require_once"./mvc/views/block/bread.php"; ?>
<!-- noidung -->
<div class="product">
	<div class="container special">
		<!-- goi file list categories -->
		<?php require_once"./mvc/views/block/categori.php"?>

		<!-- goi file list best saler -->
		<?php require_once"./mvc/views/block/bestsell.php"?>

		<!-- goi file discount -->
		<?php require_once"./mvc/views/block/discount.php"?>
	</div>
<?php require('./mvc/views/sanpham/'.$data["sanpham"].'.php') ?>

	<div class="clear-fix"></div>
	<div class="in">
		<ul class="pagination">
			<!-- <li><a href="#"><span>&laquo;</span></a></li> -->
			<!-- <li><a href="#"><span>&raquo;</span></a></li> -->
		</ul>

	</div>

</div>


<!-- end slideshow -->
<!-- start main content -->

<!-- end main content -->

<!-- Gọi file footer -->
    <?php
        require"./mvc/views/block/footer.php";
     ?>  
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript" charset="utf-8" async defer></script>    
<script src="<?php echo url("public/js/ajax.js")?>" type="text/javascript" charset="utf-8" async defer></script>    
</body>
</html>