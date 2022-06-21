<div class="col-lg-5 pb-5">
    <div id="product-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner border">
            <?php foreach ($product as $prod) : ?>
                <div class="carousel-item active">
                    <img class="w-100 h-100" src="<?= $upload_url . "products/" . $product['image'] ?>" alt="Image">
                </div>
            <?php endforeach; ?>
            <!-- <div class="carousel-item active">
                <img class="w-100 h-100" src="assets/img/product-1.jpg" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100 h-100" src="assets/img/product-2.jpg" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100 h-100" src="assets/img/product-3.jpg" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100 h-100" src="assets/img/product-4.jpg" alt="Image">
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
            <i class="fa fa-2x fa-angle-left text-dark"></i>
        </a>
        <a class="carousel-control-next" href="#product-carousel" data-slide="next">
            <i class="fa fa-2x fa-angle-right text-dark"></i>
        </a>
    </div>
</div>