<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 6.12.2016
 * Time: 00:54
 */
class request
{

    private $parsed_url,$path_array,$stdclass,$folder;

    public function input($name)
    {


        return $_POST[$name];
    }


    public function file($name)
    {


        $this->stdclass = new stdClass();
        $this->stdclass->tmp = $_FILES[$name]["tmp_name"];
        $this->stdclass->name = $_FILES[$name]["name"];
        return $this->stdclass;

    }


    public function upload($name)
    {

        $this->parsed_url = parse_url($_SERVER['PHP_SELF']);
        $this->path_array = explode('/', $this->parsed_url['path']);
        array_pop($this->path_array);
        $this->folder = join('/', $this->path_array);
        return move_uploaded_file($this->file($name)->tmp, $_SERVER['DOCUMENT_ROOT'] . $this->folder . "/public/img/" . $this->file($name)->name);
    }
}
