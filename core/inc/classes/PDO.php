<?php
/**
 * Created by PhpStorm.
 * User: alber
 * Date: 07.03.2019
 * Time: 22:34
 */

namespace FaaPz\PDO;


use Tracy\Debugger;

class PDO
{
    private $connection;
    public function __construct($host,$user,$pass)
    {
        try {
            $dbh = new \PDO('mysql:host=localhost;dbname=test', $user, $pass);
            foreach($dbh->query('SELECT * from clanky') as $row) {
                print_r($row);
                Debugger::barDump($row, "articles from database");
            }
            $dbh = null;
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }    }
}
