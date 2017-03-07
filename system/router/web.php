<?php

Router::get("/",function(){
    
return view("welcome");    
});

Router::get("/form/*","form@form");



Router::get("/ders/*","ders@fizik");


Router::post("as",function (){


    print_r($_POST);
});

Router::get("/anasayfa","anasayfa@index");




Router::get("/c","bb@aa");





