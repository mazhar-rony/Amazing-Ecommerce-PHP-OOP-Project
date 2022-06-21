<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Colors\Color;

$colors = new Color();

$colors = $colors->all();

?>
<div class="border-bottom mb-4 pb-4">
    <h5 class="font-weight-semi-bold mb-4">Filter by color</h5>
    <form>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" checked id="color-all">
            <label class="custom-control-label" for="price-all">All Color</label>
            <span class="badge border font-weight-normal">1000</span>
        </div>

        <?php foreach($colors as $color): ?>
        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
            <input type="checkbox" class="custom-control-input" id="color-1">
            <label class="custom-control-label" for="color-1"><?= $color['color_name'] ?></label>
            <span class="badge border font-weight-normal">150</span>
        </div>
        <?php endforeach; ?>
    </form>
</div>