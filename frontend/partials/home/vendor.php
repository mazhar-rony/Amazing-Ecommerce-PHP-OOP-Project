<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Vendors\Vendor;

$vendor = new Vendor();

$vendors = $vendor->all();

?>

<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            
            <div class="owl-carousel vendor-carousel">
                <?php foreach($vendors as $vendor): ?>

                <div class="vendor-item border p-4">
                    <img src="<?= $upload_url . "vendors/" . $vendor['image'] ?>" alt="">
                </div>

                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>