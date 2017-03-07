<?php

class engine{


    private $file;
        private $ben;
        private $myarray;
        public function template($file,$vars=false){
    $this->myarray=$vars;

           $this->file=file_get_contents("app/views/$file.php");




            extract($this->myarray);

      print_r(preg_replace_callback("#{{(.*)}}#isU",function($a){

     return gettype($this->myarray);
       },$this->file));
        }

}