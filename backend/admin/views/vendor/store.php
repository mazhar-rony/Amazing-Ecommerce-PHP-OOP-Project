<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Vendors\Vendor;

$vendor = new Vendor();

$image = $_FILES['image']['name'];

$target = $_FILES['image']['tmp_name'];
$destination = $upload_path . "vendors/" . $image;

$is_file_uploaded = move_uploaded_file($target, $destination);

// validation
// sanitization

$data = ['image' => $image];
$result = $vendor->store($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/vendor/list.php");
