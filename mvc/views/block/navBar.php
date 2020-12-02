<div class="header1">
    <div class="header-top">
      <div class="header-container">
        <div class="search">
          <!-- <form method="get" action="search/keyword/" autocomplete="off">
            <div class="autocomplete">
              <input placeholder="Search" id="myInput" type="text" name="s" onfocus="this.value='';"onblur="if(this.value==''){this.value='Search';}" required>  
            </div>
            <input type="submit" value="Tìm">
          </form> -->
          <form autocomplete="off" action="search/keyword/" method="get">
            <div class="autocomplete" style="width: 100%">
              <input id="myInput" type="text" name="s" placeholder="Search" value="">
            </div>
              <!-- <input type="submit" value="Tìm"> -->
          </form>
        </div>
        <div class="header-left">
          <ul>
            <a class="notification ">
              </a>
      <?php if (isset($_SESSION["username"])) { ?>
              <li class="theli">
                <a class="thea"><?php echo $_SESSION["username"];?></a>
              </li>
            <li class="theli ">
              <a class="thea" href="<?php echo url("User/dangxuat") ?>">Đăng Xuất</a>
            </li>
            <li class="theli ">
              <a class="thea" href="<?php echo url("Cart/lich_su_mua_hang") ?>">Lịch Sử</a>
            </li>
      <?php } else{ ?>
            <li class="theli">
              <a class="thea" href="<?= url('user') ?> " title="Đăng nhập">Đăng Nhập</a>
            </li>
            <li class="theli ">
              <a class="thea" href="<?php echo url("user/dangki") ?>">Đăng ký</a>
            </li>
      <?php  }?>
            <li class="theli">
              <a class="thea" href="user/login" id="dropdown"></a>
            </li>
     
          </ul>
          <div class="shopping-cart">
            <a href="<?php echo url("Cart/detail/1") ?>">
               
                <span class="badge"></span>
            
             <i class="fab fa-yin-yang" style="color:#fff;">Giỏ Hàng</i> 
            </a>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="header-container">
      <div class="header-top2 clear-fix">
        <a href="<?=url('home')?>"><img class="imgHeader" src="<?php echo url("public/images/logoStore.png") ?>"></a>
       
        <div class="header-navbar">
          <div class="menu-destop">
  <div class="main-nav1">

<ul class="clearfix">
  <li><a href="<?php echo url("home") ?>">Trang Chủ</a></li>
        <li><a href="<?php echo url("about") ?>">Giới Thiệu</a></li>
        <li><a href="<?php echo url("sanpham") ?>">Sản Phẩm</i></a>
            <ul class="sub-menu">

              <?php if (isset($data["cate"])) {
                  foreach ($data["cate"] as $key) {
                       
              ?>
              <li><a href=""><?php echo $key["name_categori"]; ?><span class="sub-tex"></span></a>
                <ul class="sub-menu1">
                  <?php 
                      foreach ($data["sub_cate"] as $key1) {
                        if ($key["id"] == $key1["categori_id"]) {
                            $id = $key1["id"];
                   ?>

                    <li><a href="<?php echo url("sanpham/all/$id") ?>"><?php echo $key1["name_sub_cate"]; ?></span></a> 
                    </li>
                    
                  <?php }
                  } ?>
                </ul>
             <!--  </li>
              <li><a href="product/product_by_cate/2">Quần Nam <span class="sub-tex"></span></a>
                  <ul class="sub-menu1">
                    <li><a href="product/all_list/4">Quần Jean Nam</a></li>
                    <li><a href="product/all_list/3">Quần Kaki Nam</a></li>
                    <li><a href="product/all_list/5">Quần Vải Nam</a></li>
                    <li><a href="product/all_list/6">Quần Short Nam</a></li>
                  </ul>
              </li>
              <li><a href="product/product_by_cate/3">Giày Dép Nam</a></li>
              <li><a href="product/product_by_cate/4">Suit Nam</a></li>
              <li><a href="product/product_by_cate/5">Phụ Kiện <span class="sub-tex"></span></a>
                <ul class="sub-menu1">
                  <li><a href="product/all_list/9">Quần Lót Nam</a></li>
                  <li><a href="product/all_list/10">Thắt Lưng Nam</a></li>
                  <li><a href="product/all_list/11">Ví Nam</a></li>
                  <li><a href="product/all_list/12">Mũ Nam</a></li>
                  <li><a href="product/all_list/13">Vớ Nam</a></li>
                  <li><a href="product/all_list/14">Caravat Nam</a></li>
                </ul>
              </li> -->

              <?php }
            } 
            ?>

            </ul>
        </li>
      
        <li><a href="<?php echo url("News") ?>">Tin Tức</a></li>
        <li><a href="<?php echo url("HT_cua_hang/Sayhi") ?>">Hệ Thống Cửa Hàng</a></li>    
      </ul>
  </div>
</div>
          <div class="clearfix"></div>
        </div>

      </div>
      
    </div>
  </div>

</div>
<script type="text/javascript" src="assets/js/search.js">
</script>
<script type="text/javascript">
 
  var b = new Array(<?php echo json_encode($product); ?>);

  autocomplete(document.getElementById("myInput"), b[0]);
</script>


<script type="text/javascript">

  // set su kien khi click chuot
  function myFunction(){
    document.getElementById("dropdown").classList.toggle("show");
  }
  //xy ly khi user click chuot ben ngoai icon
 window.onclick = function(event) {
  if (!event.target.matches('.drop')) {
    var dropdowns = document.getElementsByClassName("info-login");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
