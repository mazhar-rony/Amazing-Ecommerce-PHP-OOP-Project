<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Categories\Category;

$id = $_POST['id'];
$data = ['id' => $id];
$category = new Category();
$result = $category->delete($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/category/list.php");
