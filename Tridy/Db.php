<?php

/**
 * Created by PhpStorm.
 * User: Albert Patera
 * Date: 08.10.2017
 * Time: 11:56
 */

require_once("PridatClanek.php");
class Db extends PridatClanek
{
    /*
 * @return mysqli
 */

    private static $spojeni;
    private static $stmt;
    public function getSpojeni()
    {
        return $this->spojeni;
    }

    /**
     * @param mysqli $spojeni
     */
    public function setSpojeni($spojeni)
    {
        $this->spojeni = $spojeni;
    }

    /**
     * Db constructor.
     * @param $host
     * @param $user
     * @param $pass
     * @param $dbname
     */
    public function __construct($host, $user, $pass, $dbname)
    {

        $this->spojeni = new mysqli($host, $user, $pass, $dbname);
        if(!isset($this->spojeni))
        {
            $this->spojeni = new mysqli($host, $user, $pass, $dbname);
        }
        //parent::_construct($this->title, $this->shortDescribe, $this->content);


    }

    /*
     * Kontrola, zda jsou spravne zadane udaje pro pripojeni k databazi
     */
    public function Check()
    {
        if($this->spojeni->connect_errno)
        {
            echo "Could not connect to the db" . $this->spojeni->connect_error;
        }
        else
        {
            echo "db connected";
        }
        $this->spojeni->set_charset("utf8");
    }
    /*
     * Funkce pro generovani DB dotazu
     * @return vrati SQL Dotaz
     */
    public function getQuery($q)
    {
        $this->stmt = $this->spojeni->prepare($q);
        $this->stmt->execute();

        //=is->getQuery("SELECT * FROM `test`");

    }
    public function checkQ()
    {
        if($this->stmt->execute())
        {
            echo "OK Q complete";
        }
       
    }

    public function CheckIfSubmitted() {
        $check = array();
        if(count($check) == 0) {
            Db::InsertQuery();
        }
    }

    public static function InsertQuery()
    {

        Db::$stmt = $spojeni::prepare("INSERT INTO `clanky`  VALUES ('?','3','?','?')");
        var_dump("l");
        $this->stmt->bind_param("ssss","", "$_POST", "$_POST",'time');



        if($this->stmt->execute())
        {
            echo "článek by přidán. Chcete vytvořit kategorii ? ";
        }


    }

    public function Update()
    {
        $this->stmt = $this->spojeni->prepare("UPDATE clanky SET show = 1 WHERE show=0");
        $this->stmt->execute();
    }


}