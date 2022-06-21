<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Colors\Color;

$id = $_POST['id'];
$data = ['id' => $id];
$color = new Color();
$result = $color->delete($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/color/list.php");
