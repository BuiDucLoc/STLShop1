<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php 
		require('./mvc/views/block/header.php');
?>
<?php 
	require('./mvc/views/block/nav-cart.php');
?>
<?php if(isset($data["kq"])) {?>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <div class="alert alert-success alert-dismissible container text-center bg-<?php echo $data["alert_status"] ?> text-white">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong> <?php echo $data["kq"] ?>!</strong>
  </div>
<?php } ?>

<?php require('./mvc/views/pages/'.$data["pages"].'.php') ?>
 <?php
        require"./mvc/views/block/footer.php";
 ?>  
 <script src="<?php echo url("public/js/ajax.js")?>" type="text/javascript" charset="utf-8" async defer></script>