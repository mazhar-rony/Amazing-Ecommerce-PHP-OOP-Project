<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Categories\Category;

$category = new Category();

$category_name = $_POST['category_name'];

// validation
// sanitization

$data = ['category_name' => $category_name];
$result = $category->store($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/category/list.php");
