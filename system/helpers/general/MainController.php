<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 26.9.2016
 * Time: 18:15
 */

include_once "system/engine/engine.php";




class MainController
{

    protected  $getUrl;
    public function __construct(){

        $this->getUrl=Router::$dynUrl;
        if(!function_exists('view')) {

            function view($param,$vars=false)
            {
                restore_include_path();
                extract($vars);
           include_once "app/views/$param.view.php";





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
