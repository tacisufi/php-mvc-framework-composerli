<?php
/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 26.9.2016
 * Time: 18:15
 */

namespace App\controllers;
use duncan3dc\Laravel\Blade;





class MainController
{
    protected  $getUrl;
    public function __construct(){

        if(!function_exists('view')) {
            function view($param,$vars=false)
            {
                restore_include_path();
$vars=is_array($vars)? $vars:[];
                Blade::addPath();
           echo Blade::render($param,$vars);
            }
        }
        function redirect($redirectUrl){
            return header("location:$redirectUrl");
        }
    }
    function __call($method,$par){
        echo $method." class not found";
    }
}
