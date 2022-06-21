<?php

namespace Amazing\Utility;
// include_once($_SERVER['DOCUMENT_ROOT'] . "/amazing/src/Utility/Utility.php");
class Helper extends Utility
{

    public static function redirect($url)
    {
        header('location:' . $url);
    }


    public static function loadPartial($partialName, $path)
    {
        global $webroot_admin;
        include_once($path . "/partials/" . $partialName);
    }
}
