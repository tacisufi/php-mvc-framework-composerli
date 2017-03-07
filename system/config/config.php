<?php

/**
 * Created by PhpStorm.
 * User: kutuphane
 * Date: 10.12.2016
 * Time: 18:17
 */

namespace System\config;
class config {

public function settings(){

/*

database connect config settings

*/
return array(
      "host"=>"localhost",//database host
      "dbname"=>"ders", //database name
      "user"=>"root", //database user
      "password"=>"" //database password

);
   }
}
