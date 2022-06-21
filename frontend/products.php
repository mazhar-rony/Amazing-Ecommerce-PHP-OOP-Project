<!DOCTYPE html>
<html lang="en">

<!-- Html Head Start -->
<?php include_once('partials/include/html_head.php');?>
<!-- Html Head End -->

<body>
    <!-- Topbar Start -->
    <?php include_once('partials/include/topbar.php');?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include_once('partials/include/navbar.php');?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <?php include_once('partials/products/page_header.php');?>
    <!-- Page Header End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Products Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <?php include_once('partials/products/sidebar/price.php');?>
                <!-- Price End -->
                
                <!-- Color Start -->
                <?php include_once('partials/products/sidebar/color.php');?>
                <!-- Color End -->

                <!-- Size Start -->
                <?php include_once('partials/products/sidebar/size.php');?>
                <!-- Size End -->
            </div>
            <!-- Products Sidebar End -->


            <!-- Products Product Start -->
            <?php include_once('partials/products/products.php');?>
            <!-- Products Product End -->
        </div>
    </div>
    <!-- Products End -->

    <!-- Footer Start -->
    <?php include_once('partials/include/footer.php');?>
    <!-- Footer End -->

    <!-- HTML Footer Start -->
    <?php include_once('partials/include/html_footer.php');?>
    <!-- HTML Footer End -->

</body>

</html>