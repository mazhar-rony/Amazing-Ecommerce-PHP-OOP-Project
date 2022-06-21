<?php 
namespace Amazing\Utility;

class Debugger extends Utility{

    public static function debug($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        echo "<hr />";

    }

    public static function d($data){
        self::debug($data);
    }

    public static function dd($data){
        self::debug($data);
        die(__FILE__.__LINE__);
    }
}
