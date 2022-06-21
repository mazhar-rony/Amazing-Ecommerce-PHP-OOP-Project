<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\ProductTypes\ProductType;

$productType = new ProductType();

$product_type = $_POST['product_type'];

// validation
// sanitization

$data = ['product_type' => $product_type];
$result = $productType->store($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/product_type/list.php");
