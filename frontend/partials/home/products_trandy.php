<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Products\Product;

$product = new Product();

$products = $product->all();
?>
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <?php foreach ($products as $product) :
            if ($product['product_type'] === 2) {
        ?>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="<?= $upload_url . "products/" . $product['image'] ?>" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"><?= $product['product_name'] ?></h6>
                            <div class="d-flex justify-content-center">
                                <h6><?= number_format($product['discounted_price'], 2) ?></h6>
                                <h6 class="text-muted ml-2"><del><?= number_format($product['actual_price'], 2) ?></del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="product_detail.php?id=<?= $product['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
        <?php }
        endforeach; ?>
    </div>
</div>