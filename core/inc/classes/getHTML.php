<?php

/**
 * Created by PhpStorm.
 * User: Albert Patera
 * Date: 07.10.2017
 * Time: 23:20
 */

namespace Core\Inc\Classes;
class getHTML
{
    public $name;
    public $typeT;

    public function __construct($typeT,$name)
    {
        $this->typeT = $typeT;
        $this->name = $name;
    }
/*
    public function getFirst()
    {
        echo "<" . $this->type  . " id=" . $this->name. "  >";
    }
*/
    public function getEnd($typeT)
    {
        echo "</" . $this->typeT . ">";
    }

    public function getStart($typeT) {
        echo "<" . $this->$typeT . ">";
    }




}

