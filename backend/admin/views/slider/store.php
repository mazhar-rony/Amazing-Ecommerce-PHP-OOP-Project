<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Sliders\SliderHome;

$slider = new SliderHome();

$caption_title = $_POST['caption_title'];
$caption = $_POST['caption'];

$image = $_FILES['image']['name'];

$target = $_FILES['image']['tmp_name'];
$destination = $upload_path . "slides/" . $image;

$is_file_uploaded = move_uploaded_file($target, $destination);

// validation
// sanitization

$data = ['caption_title' => $caption_title, 'caption' => $caption, 'image' => $image];
$result = $slider->store($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/slider/list.php");
