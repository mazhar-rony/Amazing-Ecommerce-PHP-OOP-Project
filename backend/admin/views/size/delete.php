<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Sizes\Size;

$id = $_POST['id'];
$data = ['id' => $id];
$size = new Size();
$result = $size->delete($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/size/list.php");
