<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Products\Product;

$id = $_POST['id'];

$product_name = $_POST['product_name'];
$product_info = $_POST['product_info'];
$short_description = $_POST['short_description'];
$description = $_POST['description'];
$product_category = $_POST['product_category'];
$product_size = $_POST['product_size'];
$product_color = $_POST['product_color'];
$product_type = $_POST['product_type'];
$actual_price = $_POST['actual_price'];
$discounted_price = $_POST['discounted_price'];

$image = $_POST['image_existing'];

//isset
if (array_key_exists('image', $_FILES) && !empty($_FILES['image']['name'])) {
    $image = $_FILES['image']['name'];

    $target = $_FILES['image']['tmp_name'];
    $destination = $upload_path . "products/" . $image;

    $is_file_uploaded = move_uploaded_file($target, $destination);
}



$data = [
    'id' => $id, 'product_name' => $product_name, 'product_info' => $product_info, 'short_description' => $short_description,
    'description' => $description, 'product_category' => $product_category, 'product_size' => $product_size,
    'product_color' => $product_color, 'product_type' => $product_type, 'actual_price' => $actual_price,
    'discounted_price' => $discounted_price, 'image' => $image
];

$product = new Product();
$result = $product->update($data);


if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/product/list.php");
