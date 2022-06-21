<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");
?>
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <!-- <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>           -->
      <a href="index.php" class="site_title"><span class="font-weight-bold border px-3 m-1" style="background:#fff; color:#d19c97;">A</span>Mazing</a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="<?= $upload_url . "admin/mazhar.jpg" ?>" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>Mazhar</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <!-- <li><a href="views/slider/list.php">Slider</a></li> -->
              <li><a href="<?= $webroot_admin . "/views/slider/list.php" ?>">Slider</a></li>
              <li><a href="<?= $webroot_admin . "/views/category/list.php" ?>">Category</a></li>
              <li><a href="<?= $webroot_admin . "/views/color/list.php" ?>">Color</a></li>
              <li><a href="<?= $webroot_admin . "/views/size/list.php" ?>">Size</a></li>
              <li><a href="<?= $webroot_admin . "/views/offer/list.php" ?>">Offer</a></li>
              <li><a href="<?= $webroot_admin . "/views/vendor/list.php" ?>">Vendor</a></li>
              <li><a href="<?= $webroot_admin . "/views/product_type/list.php" ?>">Product Type</a></li>
              <li><a href="<?= $webroot_admin . "/views/product/list.php" ?>">Product</a></li>
            </ul>
          </li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>