<div class="container-xs">
	<ul class="breadcrumb">
		<li><a href="">Trang chủ</a></li>
		<li>Tin Tức</li>
	</ul>
<div class="main clearfix">

    <div class="container special">
<div class="col-md-3 col-10 col-xs-12">
    <div class="news-latest">
        <div class="main-heart"><h3>bài viết mới nhất</h3></div> 

        <div class="img">
            <?php foreach ($data["new"] as $key) {?>
            <div class="img1 clearfix">
                    <div class="item-img">
                      <a href="Home"><img class="img-responsive" height="65px" width="75px" src="<?php echo url("public/images/".$key["image"])?>" alt=""></a>
                        
                    </div>
                    <div class="item-title">
                        <h3><a href="Home"><?php echo $key['name']; ?></a></h3>
                        <span class="author"><?php echo $key['hoten']; ?></span>
                     	<span class="date"><?php $date = new DateTime($key['date']);
                            echo $date->format('d-m-Y');
                        ?></span>
                        
                    </div>
            </div>
            <?php } ?>
  
        </div>
    </div>  
</div>



    <div class="col-md-9 col-10 col-xs-12">
        <div class="main-right-title">
           <span>Tin Tức</span>
        </div>
          <div class="main-right-img">
            <?php foreach ($data["new"] as $key) {?>
              <div class="main-right-img1">
                  <div class="right-img-item">
                      <div class="col-md-4 col-xs-12 col-sm-12 ">
                        <a href="Home" class="example">
                          <img src="<?php echo url("public/images/".$key["image"]) ?>" alt="">
                        </a>
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-12">
                          <h3 class="h3-title"><a href="Home"><?php echo $key['name'] ?></a></h3>
                          <div class="blog-post">
                            <span class="author">Người viết: <?php echo $key['hoten']; ?></span>
                            <span class="date"><?php $date = new DateTime($key['date']);
                            echo $date->format('d-m-Y');
                        ?></span>
                          </div>
                          <div class="title-desc"><p><?php echo $key['content']; ?></p></div>
                      </div>
                  </div>
              </div>
            <?php } ?>
          
        </div>
</div>
</div>
</div>
</div>