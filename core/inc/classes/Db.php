<?php

/**
 * Created by PhpStorm.
 * User: Albert Patera
 * Date: 08.10.2017
 * Time: 11:56
 */


//require_once("PridatClanek.php");

namespace Core\Inc\Classes;

class Db
{
    /*
 * @return mysqli
 */


    public static $pdo;



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



    }



    public function initPDO() {

        $dsn = 'mysql:dbname=' . 'd124371_apczweb' . ';host=' . 'localhost' . '';
        $pdo = new \PDO($dsn, 'root', '');
        try {
            $pdo = new \PDO($dsn, 'root', '');
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }

        //$dotaz = $pdo->query("SELECT jmeno, prijmeni FROM uzivatele");
    }


    //insert simple query


    public function init() {
        $dsn = 'mysql:dbname=' . 'd124371_apczweb' . ';host=' . 'localhost' . '';

        $pdo = new \PDO($dsn, 'root', '');
}
    public  function getSimpleQuery($q) {
        $dsn = 'mysql:dbname=' . 'd124371_apczweb' . ';host=' . 'localhost' . '';

        $pdo = new \PDO($dsn, 'root', '');

        global $dsn;
        $this->init();
        //$dsn = 'mysql:dbname=' . 'd124371_apczweb' . ';host=' . 'localhost' . '';

        $pdo->query($q);


    }

    public function getSimpleInsert() {
       global $dsn;
       $this->init();

        $dsn = 'mysql:dbname=' . 'd124371_apczweb' . ';host=' . 'localhost' . '';

        $pdo = new \PDO($dsn, 'root', '');

        // Připravení dotazu
        // Připravení dotazu
        /*$dotaz = $pdo->prepare("INSERT into clanky (title, short_describe, content, last_modification, cats_name) VALUES(?, ?, ?, ?, ?)");
// Vykonání dotazu
        $vysledek = $dotaz->execute(array(
            $_POST['nazev'],
            $_POST['shortDescribe'],
            $_POST['content'],
            time(),
            $_POST["catsName"]
        ));
        */
        $date = date("Y-m-d h:i:s");
        $q = "INSERT INTO clanky (title, content, short_describe, last_modification, url) VALUES (' " . $_POST['title'] . "', '" . $_POST["content"] . "', '" . $_POST["shortDescribe"] . "', '" .  $date . "', '" . $_POST["url"] . "')";
        echo $q;
        //$test = $pdo->query('INSERT into clanky (title, content) VALUES (0,0)');
        print_r($_POST);
        $insert = $pdo->query("INSERT INTO clanky (title, content, short_describe, last_modification, url) VALUES (' " . $_POST['title'] . "', '" . $_POST["content"] . "', '" . $_POST["shortDescribe"] . "', '" .  $date . "', '" . $_POST["url"] . "')");
// Vykonání dotazu


        $insert->execute([

        ]);
        $dump = "INSERT INTO clanky (title, content, short_describe, last_modification) VALUES (' " . $_POST['title'] . "', '" . $_POST["content"] . "', '" . $_POST["shortDescribe"] . "', '" . $date . "')";
        echo $dump;


    }
    /*
     * Kontrola, zda jsou spravne zadane udaje pro pripojeni k databazi
     */

    /*
     * Funkce pro generovani DB dotazu
     * @return vrati SQL Dotaz
     */




}