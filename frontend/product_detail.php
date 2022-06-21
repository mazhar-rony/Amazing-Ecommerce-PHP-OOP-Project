<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Products\Product;

$id = $_GET['id'];
$product = new Product();

$products = $product->all();
$product = $product->show($id);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Html Head Start -->
<?php include_once('partials/include/html_head.php'); ?>
<!-- Html Head End -->

<body>
    <!-- Topbar Start -->
    <?php include_once('partials/include/topbar.php'); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include_once('partials/include/navbar.php'); ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <?php include_once('partials/product_detail/page_header.php'); ?>
    <!-- Page Header End -->


    <!-- Product Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">

            <!-- Product Slider Start -->
            <?php include_once('partials/product_detail/product_slider.php'); ?>
            <!-- Product Slider End -->

            <!-- Product Info Start -->
            <?php include_once('partials/product_detail/product_info.php'); ?>
            <!-- Product Info End -->

        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Information</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews (0)</a>
                </div>
                <div class="tab-content">
                    <!-- Product Description Start -->
                    <?php include_once('partials/product_detail/product_description.php'); ?>
                    <!-- Product Description End -->

                    <!-- Product Additional Information Start -->
                    <?php include_once('partials/product_detail/product_additional_info.php'); ?>
                    <!-- Product Additional Information End -->

                    <!-- Product Review Information Start -->
                    <?php include_once('partials/product_detail/product_review.php'); ?>
                    <!-- Product Review Information End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Product Detail End -->


    <!-- Related Products Start -->
    <?php include_once('partials/product_detail/related_products.php'); ?>
    <!-- Related Products End -->


    <!-- Footer Start -->
    <?php include_once('partials/include/footer.php'); ?>
    <!-- Footer End -->

    <!-- HTML Footer Start -->
    <?php include_once('partials/include/html_footer.php'); ?>
    <!-- HTML Footer End -->

</body>

</html>