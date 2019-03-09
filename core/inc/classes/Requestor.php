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
            Debugger::barDump($url . $dir, "include classes:" .  $url . " / " . $dir . "");
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

        echo $_SESSION["$data"] = "$post";
        Debugger::barDump($_SESSION, 'session info');

    }

    public static function issetField($post_data) {
        if(!isset($_POST["$post_data"])) {
            $_POST["$post_data"] = "";
            Debugger::barDump($post_data, "$post_data initializaliation successed");
        } else {
            Debugger::barDump($post_data, "$post_data initializaliation failed");

        }
    }
    public static function flashMessage($type, $msg) {
        $f = "<span class=' information alert alert-$type '>";
        $f .= $msg;
        $f .= "</span>";

        if($type) {
            Debugger::barDump($type, "Flash type" .$type . "init with " . $msg);
        } else {
            Debugger::barDump($type, "init failed");

        }

        echo $f;

    }
}

