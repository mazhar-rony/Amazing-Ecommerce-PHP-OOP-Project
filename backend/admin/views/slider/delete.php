<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Sliders\SliderHome;

$id = $_POST['id'];
$data = ['id' => $id];
$slider = new SliderHome();
$result = $slider->delete($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/slider/list.php");
