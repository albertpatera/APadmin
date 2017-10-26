<?php

/**
 * Created by PhpStorm.
 * User: Albert Patera
 * Date: 07.10.2017
 * Time: 23:20
 */
class getHTML
{
    public function __construct($type,$name)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function getFirst()
    {
        echo "<" . $this->type  . " id=" . $this->name. "  >";
    }

    public function getLast()
    {
        echo "</" . $this->type . ">";
    }

    public function Alone($type) {
        echo "<" . $type . ">";
    }


}