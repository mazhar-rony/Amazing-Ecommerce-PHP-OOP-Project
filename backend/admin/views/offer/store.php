<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Offers\Offer;

$offer = new offer();

$caption_title = $_POST['caption_title'];
$caption = $_POST['caption'];

$image = $_FILES['image']['name'];

$target = $_FILES['image']['tmp_name'];
$destination = $upload_path . "offers/" . $image;

$is_file_uploaded = move_uploaded_file($target, $destination);

// validation
// sanitization

$data = ['caption_title' => $caption_title, 'caption' => $caption, 'image' => $image];
$result = $offer->store($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/offer/list.php");
