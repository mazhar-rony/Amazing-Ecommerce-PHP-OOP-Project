<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Products\Product;

$id = $_POST['id'];
$data = ['id' => $id];
$product = new Product();
$result = $product->delete($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/product/list.php");
