<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\ProductTypes\ProductType;

$id = $_POST['id'];
$data = ['id' => $id];
$productType = new ProductType();
$result = $productType->delete($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/product_type/list.php");
