<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Offers\Offer;

$id = $_POST['id'];
$caption_title = $_POST['caption_title'];
$caption = $_POST['caption'];
$image = $_POST['image_existing'];

//isset
if (array_key_exists('image', $_FILES) && !empty($_FILES['image']['name'])) {
    $image = $_FILES['image']['name'];

    $target = $_FILES['image']['tmp_name'];
    $destination = $upload_path . "offers/" . $image;

    $is_file_uploaded = move_uploaded_file($target, $destination);
}



$data = ['id' => $id, 'caption_title' => $caption_title, 'caption' => $caption, 'image' => $image];

$offer = new Offer();
$result = $offer->update($data);


if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/offer/list.php");
