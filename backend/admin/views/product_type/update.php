<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\ProductTypes\ProductType;

$id = $_POST['id'];

$product_type = $_POST['product_type'];

$data = ['id' => $id, 'product_type' => $product_type];

$productType = new ProductType();
$result = $productType->update($data);


if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/product_type/list.php");
