<?php
/**
 * Created by PhpStorm.
 * User: zeus
 * Date: 6.03.2017
 * Time: 22:27
 */

namespace App\controllers;


class anasayfa  extends MainController
{


    public function index(){


        $title="deneme site başlığı";
        $icerik="bu deneme içeriktir ve sitenin nasıl çalıştığını göreceğiz";
        $data=[5,78,9,12,456,753];
        $sayi=13;



        return view("anasayfa",compact("title","icerik","data","sayi"));
    }
}