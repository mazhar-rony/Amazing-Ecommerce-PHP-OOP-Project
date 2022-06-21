<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>
    </div>
    <div class="row px-xl-5">

        <div class="col">

            <div class="owl-carousel related-carousel">
                <?php
                $category = $product['product_category'];

                foreach ($products as $prod) :
                    if ($prod['product_category'] === $category && $prod['id'] !== $product['id']) {
                ?>

                        <div class="card product-item border-0">


                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="<?= $upload_url . "products/" . $prod['image'] ?>" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"><?= $prod['product_name'] ?></h6>
                                <div class="d-flex justify-content-center">
                                    <h6><?= number_format($prod['discounted_price'], 2) ?></h6>
                                    <h6 class="text-muted ml-2"><del><?= number_format($prod['actual_price'], 2) ?></del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="product_detail.php?id=<?= $prod['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>

                        </div>
                <?php }
                endforeach; ?>

            </div>

        </div>

    </div>
</div>