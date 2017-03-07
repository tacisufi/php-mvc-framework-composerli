<?php
/**
 * Created by PhpStorm.
 * User: zeus
 * Date: 6.03.2017
 * Time: 11:21
 */

namespace App\controllers;


class form
{



    public function form($a,$b){



        return view("form",compact("b"));
    }
}