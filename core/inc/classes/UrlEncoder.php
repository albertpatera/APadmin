<?php
class UrlEncoder{
    private $name;
    public function setName($name){
       $this->name = $name;
    }
    public function getName(){
       return 'welocme'. $this->name ;
    }

    public function clearUrl($name) {
      $return = trim($this->getName());
      $return = strtolower($this->getName());
      $return = str_replace($this->getName(), "-", " uuuiu");
      return $return;
      
    }
 }
 $person = new UrlEncoder();
 $person->setName($person->clearUrl("jak je ? "));
 $name = $person->getName();
 //echo " 53 " . $name;
 //echo $person->clearUrl("eee");
 $letters = array('-', '__');
 $fruit   = array($person->getName(), 'pear');
 $text    = 'a p';
 $output  = str_replace($letters, $fruit, $person->setName("rrrrr - h ghh hn"));
 //echo $output;
 

