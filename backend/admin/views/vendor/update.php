<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Vendors\Vendor;

$id = $_POST['id'];
$image = $_POST['image_existing'];

//isset
if (array_key_exists('image', $_FILES) && !empty($_FILES['image']['name'])) {
    $image = $_FILES['image']['name'];

    $target = $_FILES['image']['tmp_name'];
    $destination = $upload_path . "vendors/" . $image;

    $is_file_uploaded = move_uploaded_file($target, $destination);
}



$data = ['id' => $id, 'image' => $image];

$vendor = new Vendor();
$result = $vendor->update($data);


if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/vendor/list.php");
