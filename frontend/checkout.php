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
    <?php include_once('partials/checkout/page_header.php');?>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">

                <!-- Billing Address Start -->
                <?php include_once('partials/checkout/billing_address.php');?>
                <!-- Billing Address End -->

                <!-- Shipping Address Start -->
                <?php include_once('partials/checkout/shipping_address.php');?>
                <!-- Shipping Address End -->
                
            </div>
            <div class="col-lg-4">

                <!-- Order Total Start -->
                <?php include_once('partials/checkout/order_total.php');?>
                <!-- Order Total End -->
                
                <!-- Payment Start -->
                <?php include_once('partials/checkout/payment.php');?>
                <!-- Payment End -->

            </div>
        </div>
    </div>
    <!-- Checkout End -->

    <!-- Footer Start -->
    <?php include_once('partials/include/footer.php');?>
    <!-- Footer End -->

    <!-- HTML Footer Start -->
    <?php include_once('partials/include/html_footer.php');?>
    <!-- HTML Footer End -->
    
</body>

</html>