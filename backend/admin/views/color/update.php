<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Colors\Color;

$id = $_POST['id'];
$color_name = $_POST['color_name'];

$data = ['id' => $id, 'color_name' => $color_name];

$colors = new Color();
$result = $colors->update($data);


if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/color/list.php");
