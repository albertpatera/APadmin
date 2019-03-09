<?php
/**
 * Created by PhpStorm.
 * User: alber
 * Date: 09.03.2019
 * Time: 18:27
 */

$MENU = array(
    "identificator" => 'Addarticle'

);

foreach ($MENU as $item => $value) {
    echo "<li id='" . $MENU['identificator'] . "'><a href='#'" . $MENU["identificator"]. "' class='btn btn-primary'>" .  $item."</a></li>";
}

\Tracy\Debugger::barDump($MENU["id"]);