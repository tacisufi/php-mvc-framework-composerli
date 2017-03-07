<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 17.10.2016
 * Time: 09:15
 */

namespace System\helpers\general;

use System\config\config;
include_once "system/config/config.php";

trait craud
{

private $result,$columnString,$valueString,$STH ;

    private $conf,$where,$join,$connect,$array,$col,$query,$b,$bwhere;

    function __construct(){

       $this->conf=(new config())->settings();
        $this->connect=new \PDO("mysql:host=".$this->conf["host"].";dbname=".$this->conf["dbname"].";charset=utf8",$this->conf["user"],$this->conf["password"]);

    }

    function __set($name, $value)
    {
        $this->col[$name]=$value;

    }

    public function find($id){

        $this->result=$this->connect->prepare("select * from ".$this->table." where id=:id ");
        $this->result->bindParam("id",$id);
        $this->result->execute();
        $this->result=$this->result->fetch(\PDO::FETCH_ASSOC);

       return $this->result;



    }

public function join(array $join){


$this->join=implode(",",$join);

    return $this;



}

    public function where($where){

     foreach($where as $item=>$value){


            $this->bwhere.=$item."=".$value." and ";
        }

    $this->bwhere=substr($this->bwhere,0,-5);

        $this->where=" where $this->bwhere";



        return $this;
    }



    public function get(){

        $this->result=$this->connect->query("select * from ".$this->table.$this->join.$this->where);

       while($a=$this->result->fetch(\PDO::FETCH_ASSOC)){


           $this->array[]=$a;
       }


       return $this->array;




    }



    public function delete(){

return $this->connect->exec("delete  from ".$this->table.$this->where);




    }



    public function update(array $updt){

        
        
   
        foreach($updt as $item=>$value){


            $this->b.=$item."=".$value.",";
        }
        $this->b=substr($this->b,0,-1);

        return $this->connect->exec("update ".$this->table." set ".$this->b.$this->where);


      //  return $this->connect->exec("update ".$this->table." set ".$update.$this->where); eskisi 



    }





    public function add(array $insert){


        $this->columnString = implode(',', array_keys($insert));
        $this->valueString = implode(',', array_fill(0, count($insert), '?'));

        $this->STH = $this->connect->prepare("INSERT INTO ".$this->table." ($this->columnString) VALUES ($this->valueString)");
       return  $this->STH->execute(array_values($insert));



    }
}
