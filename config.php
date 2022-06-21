<?php

ini_set('display_errors', '1');

$folderName = "amazing";

$docroot = $_SERVER['DOCUMENT_ROOT'] . "/" . $folderName;
$docroot_admin = $_SERVER['DOCUMENT_ROOT'] . "/" . $folderName . "/backend/admin";

$webroot = "http://localhost/" . $folderName;
$webroot_admin = $webroot . "/backend/admin";

$url_home = $webroot . "/frontend/";
$url_admin = $webroot . "/backend/admin/";

$autoload = $docroot . "/vendor/autoload.php";

$upload_url = $webroot . "/storage/uploads/";
$upload_path = $docroot . "/storage/uploads/";

include_once($autoload);

use Amazing\Utility\Helper;
use Amazing\Utility\Debugger;


function rdir($url)
{
    Helper::redirect($url);
}


function dd($value)
{
    Debugger::dd($value);
}

function adminpartial($filename)
{
    global $docroot_admin;
    Helper::loadPartial($filename, $docroot_admin);
}

function frontpartial($filename)
{
    global $docroot_frontend;
    Helper::loadPartial($filename, $docroot_frontend);
}

$host = 'localhost';
$db   = 'amazing';
$user = 'root';
$password = '';
$port = "3306";
$charset = 'utf8mb4';


$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

try {
    $pdo = new \PDO($dsn, $user, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
