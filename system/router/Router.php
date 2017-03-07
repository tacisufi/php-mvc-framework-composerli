<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 25.9.2016
 * Time: 15:07
 */


use duncan3dc\Laravel\Blade;


class Router
{

    private static $sayi=0;
    private static  $usecontrol;
private static $explode;
    private static $joker;
protected static $url;
public static $dynUrl=[];
public function __construct($url){
self::$url=trim($url,"/");


    if(!function_exists('view')) {

        function view($param,$vars=false)
        {
            restore_include_path();
            Blade::addPath();
            $vars=is_array($vars)? $vars :[];
            echo Blade::render($param,$vars);


        }


        }

        function  say($a){

            echo    "hello ".$a;
        }

}

//get start

protected static  function mainRouter($url,$callback){
    self::$sayi++;
    $kontrol = gettype($callback);
    if ($kontrol == "object") {


        call_user_func($callback);
    } else {



        $controlname = explode("@", $callback)[0];


        $methodname = explode("@", $callback)[1];


self::$usecontrol="\\App\\controllers\\".$controlname;

            return call_user_func_array(array(new self::$usecontrol,$methodname),explode("/",self::$url));


     


    }
}


    public static function get($url,$callback){



if ($_SERVER['REQUEST_METHOD'] === 'GET') {


$url=ltrim($url,"/");

       
if(array_filter(explode("/",self::$url)) == array_filter(explode("/",$url))){

 

      self::$dynUrl=explode("/",self::$url);


         Router::mainRouter($url, $callback);

   }
      else
      
       {

self::$explode=explode("/",$url);
self::$joker=end(self::$explode);
if(self::$joker == "*" && explode("/",$url)[0]==explode("/",self::$url)[0]){
self::$dynUrl=explode("/",self::$url);


         Router::mainRouter($url, $callback);
}



      }

        }




}

//get end





//post start


public static function post($url,$callback){



       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$url=ltrim($url,"/");

       
if(array_filter(explode("/",self::$url)) == array_filter(explode("/",$url))){

 

      self::$dynUrl=explode("/",self::$url);


         Router::mainRouter($url, $callback);

   }
      else
      
       {

self::$explode=explode("/",$url);
self::$joker=end(self::$explode);
if(self::$joker == "*" && explode("/",$url)[0]==explode("/",self::$url)[0]){
self::$dynUrl=explode("/",self::$url);


         Router::mainRouter($url, $callback);
}



      }

        }




}



//post end

//put start
  public static function put($url,$callback){



       if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
$url=ltrim($url,"/");

       
if(array_filter(explode("/",self::$url)) == array_filter(explode("/",$url))){

 

      self::$dynUrl=explode("/",self::$url);


         Router::mainRouter($url, $callback);

   }
      else
      
       {

self::$explode=explode("/",$url);
self::$joker=end(self::$explode);
if(self::$joker == "*" && explode("/",$url)[0]==explode("/",self::$url)[0]){
self::$dynUrl=explode("/",self::$url);


         Router::mainRouter($url, $callback);
}



      }

        }




}




//put end

//delete start

    public static function delete($url,$callback){



       if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
$url=ltrim($url,"/");

       
if(array_filter(explode("/",self::$url)) == array_filter(explode("/",$url))){

 

      self::$dynUrl=explode("/",self::$url);


         Router::mainRouter($url, $callback);

   }
      else
      
       {

self::$explode=explode("/",$url);
self::$joker=end(self::$explode);
if(self::$joker == "*" && explode("/",$url)[0]==explode("/",self::$url)[0]){
self::$dynUrl=explode("/",self::$url);


         Router::mainRouter($url, $callback);
}



      }

        }




}



//delete end


//any start

public static function any($url,$callback){



    
$url=ltrim($url,"/");

       
if(array_filter(explode("/",self::$url)) == array_filter(explode("/",$url))){

 

      self::$dynUrl=explode("/",self::$url);


         Router::mainRouter($url, $callback);

   }
      else
      
       {

self::$explode=explode("/",$url);
self::$joker=end(self::$explode);
if(self::$joker == "*" && explode("/",$url)[0]==explode("/",self::$url)[0]){
self::$dynUrl=explode("/",self::$url);


         Router::mainRouter($url, $callback);
}



      }

     




}


//any end


public static function submit(){

  if(self::$sayi==0){
global $page_404;
      return view($page_404);
    // return view("404");
  }

}

function __destruct()
{



}
}

