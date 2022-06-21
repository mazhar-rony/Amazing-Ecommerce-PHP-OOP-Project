<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Sizes\Size;

$id = $_POST['id'];
$product_size = $_POST['size'];

$data = ['id' => $id, 'size' => $product_size];

$sizes = new Size();
$result = $sizes->update($data);


if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/size/list.php");
