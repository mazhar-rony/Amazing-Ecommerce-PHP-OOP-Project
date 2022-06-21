<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Colors\Color;

$color = new Color();

$color_name = $_POST['color_name'];

// validation
// sanitization

$data = ['color_name' => $color_name];
$result = $color->store($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/color/list.php");
