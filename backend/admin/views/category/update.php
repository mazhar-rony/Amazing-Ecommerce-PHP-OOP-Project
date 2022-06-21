<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Categories\Category;

$id = $_POST['id'];
$category_name = $_POST['category_name'];

$data = ['id' => $id, 'category_name' => $category_name];

$category = new Category();
$result = $category->update($data);


if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/category/list.php");
