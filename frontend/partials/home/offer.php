<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Offers\Offer;

$offer = new Offer();

$offers = $offer->all();

?>
<div class="container-fluid offer pt-5">
    <div class="row px-xl-5">

    <?php foreach($offers as $offer): ?>

        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                <img src="<?= $upload_url . "offers/" . $offer['image'] ?>" alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3"><?= $offer['caption'] ?></h5>
                    <h1 class="mb-4 font-weight-semi-bold"><?= $offer['caption_title'] ?></h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        
        
    </div>
</div>