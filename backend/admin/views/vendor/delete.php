<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Vendors\Vendor;

$id = $_POST['id'];
$data = ['id' => $id];
$vendor = new Vendor();
$result = $vendor->delete($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/vendor/list.php");
