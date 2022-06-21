<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/config.php");

use Amazing\Offers\Offer;

$id = $_POST['id'];
$data = ['id' => $id];
$offer = new Offer();
$result = $offer->delete($data);

if ($result) {
    //  set appropriate messages
} else {
    //  set appropriate messages
}

rdir($webroot_admin . "/views/offer/list.php");
