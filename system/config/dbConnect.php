<?php

/**
 * Created by PhpStorm.
 * User: kutuphane
 * Date: 21.12.2016
 * Time: 13:53
 */

namespace System\config;
class dbConnect
{

    private $cnct,$database;
    public function connect(){

        $this->database=(new config())->settings();


        $this->cnct=new PDO("mysql:host=".$this->database['host'].";dbname=".$this->database['dbname'].";charset=utf8",$this->database["user"],$this->database["password"]);

        return $this->cnct;



}
}
