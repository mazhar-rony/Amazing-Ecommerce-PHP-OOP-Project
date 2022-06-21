<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Sizes\Size;

$sizes = new Size();

$sizes = $sizes->all();

?>

<div class="mb-5">
    <h5 class="font-weight-semi-bold mb-4">Filter by size</h5>
    <form>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" checked id="size-all">
            <label class="custom-control-label" for="size-all">All Size</label>
            <span class="badge border font-weight-normal">1000</span>
        </div>
        <?php foreach($sizes as $size): ?>

        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="size-1">
            <label class="custom-control-label" for="size-1"><?= $size['size'] ?></label>
            <span class="badge border font-weight-normal">150</span>
        </div>
        <?php endforeach; ?>
    </form>
</div>