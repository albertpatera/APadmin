<?php
/**
 * Created by PhpStorm.
 * User: alber
 * Date: 08.03.2019
 * Time: 22:06
 */

namespace Core\Inc\Classes;


use Tracy\Debugger;

class Requestor_class
{
    public static $url;
    public static $dir;
    public function __construct()
    {

    }

    public static function requireFile($url, $dir = NULL) {
        if($url) {
            require_once("$url" . ".php");
            Debugger::barDump($url, "include classes:" .  $url. "");
        } else {
            Debugger::barDump($url, "problem with including");

        }

        if($dir) {
            require_once( "$dir$url" .'.php');

        } else {
            Debugger::barDump('error', 'Error log');
        }

    }

    public static function setSession() {
        session_start();
    }

    public static function getDataFromSession($data, $post) {
        self::setSession();
        echo $_SESSION["$data"] = "$post";
        Debugger::barDump($_SESSION, 'session info');

    }
}