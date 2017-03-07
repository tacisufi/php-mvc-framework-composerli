<?php

/**
 * Created by PhpStorm.
 * User: kutuphane
 * Date: 20.12.2016
 * Time: 08:45
 */

session_start();
class cartClass
{

    private $data,$mysqlin;
    function __construct()
    {



        if(empty($_SESSION["cart"])){

            $_SESSION["cart"]=array();
        }

    }




    public function add($prductid){



   $this->data=$_SESSION["cart"];
   $this->data[$prductid]=$prductid;
   $this->mysqlin=$this->data;
return $_SESSION["cart"]=$this->data;
    }


public  function get(){


    return array_keys($_SESSION["cart"]);
}


public function getOut($getOutid){



   unset($_SESSION["cart"][$getOutid]);

}

public function inMysql(){


    return implode(",",array_keys($_SESSION["cart"]));
}

    public function fullEmpty(){


unset($_SESSION["cart"]);

    }



}
