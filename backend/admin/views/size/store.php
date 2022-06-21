<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Sizes\Size;

$size = new Size();

$product_size = $_POST['size'];

// validation
// sanitization

$data = ['size' => $product_size];
$result = $size->store($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/size/list.php");
