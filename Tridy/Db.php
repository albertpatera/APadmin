<?php

/**
 * Created by PhpStorm.
 * User: Albert Patera
 * Date: 08.10.2017
 * Time: 11:56
 */


//require_once("PridatClanek.php");
class Db
{
    /*
 * @return mysqli
 */






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

        $dsn = 'mysql:dbname=' . 'd124371_apczweb' . ';host=' . 'localhost' . '';
        $pdo = new PDO($dsn, 'root', '');
        try {
            $pdo = new PDO($dsn, 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }


    }

    public static function pdoInt() {
        $pdo = new PDO('mysql:host=example.com;dbname=database', 'user', 'password');
        $statement = $pdo->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        echo htmlentities($row['_message']);

    }



    public function initPDO() {

        $dsn = 'mysql:dbname=' . 'd124371_apczweb' . ';host=' . 'localhost' . '';
        $pdo = new PDO($dsn, 'root', '');
        try {
            $pdo = new PDO($dsn, 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }

        //$dotaz = $pdo->query("SELECT jmeno, prijmeni FROM uzivatele");
    }


    //insert simple query


    public function init() {
        $dsn = 'mysql:dbname=' . 'd124371_apczweb' . ';host=' . 'localhost' . '';

        $pdo = new PDO($dsn, 'root', '');
}
    public  function getSimpleQuery($q) {
        $dsn = 'mysql:dbname=' . 'd124371_apczweb' . ';host=' . 'localhost' . '';

        $pdo = new PDO($dsn, 'root', '');

        global $dsn;
        $this->init();
        //$dsn = 'mysql:dbname=' . 'd124371_apczweb' . ';host=' . 'localhost' . '';

        $pdo->query($q);


    }

    public function getSimpleInsert() {
       global $dsn;
       $this->init();

        $dsn = 'mysql:dbname=' . 'd124371_apczweb' . ';host=' . 'localhost' . '';

        $pdo = new PDO($dsn, 'root', '');

        // Připravení dotazu
        // Připravení dotazu
        //$query = "INSERT into clanky (`title`, `short_describe`, `content`, `date`) VALUES(?,?,?,?)";
        $dotaz = $pdo->prepare('INSERT into clanky (`title`, `short_describe`, `content`, `date`) VALUES(?,?,?,?)');
// Vykonání dotazu

        $dotaz->execute(array(
            $_POST["title"],
            $_POST["content"],
            $_POST["shortDescribe"],
            date('Y-m-d h:i:s')

        ));

        print_r($_POST);







// Vykonání dotazu


    }


    public function generateInput() {
        echo "<input type='submit' name='submit'>";
    }
    /*
     * Kontrola, zda jsou spravne zadane udaje pro pripojeni k databazi
     */

    /*
     * Funkce pro generovani DB dotazu
     * @return vrati SQL Dotaz
     */






}