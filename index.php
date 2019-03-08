<?php


//require_once ("")

define('ROOT_DIR', __DIR__);
define('WWW_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR);
define("BASE_DIR", ROOT_DIR .DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);
//define("BASE_DIR", ROOT_DIR .DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);

require_once 'core/inc/classes/PridatClanek.php';
require_once 'core/inc/classes/Db.php';


require 'vendor/autoload.php';
//require_once 'Tridy/PridatClanek.php';

use Tracy\Debugger;
require_once 'core/inc/classes/Requestor.php';

Debugger::enable();
$req = new \Core\Inc\Classes\Requestor_class();
$req::requireFile('PridatClanek', 'core/inc/classes/');
$req::getDataFromSession("home", "Session log");
$req::requireFile("Db", 'core/inc/classes/');
$message = array();

$insA = new \Core\Inc\Classes\PridatClanek('title', 'description', 'content', 'submit', 'image/test.png', 'Add Article');
$db = new \Core\Inc\Classes\Db('localhost', 'root', '', 'test');
$db->getSimpleInsert();
//$insA->getField();

$inputs = array('title' => $_POST['title'],
                'shortDescribe' => $_POST['shortDescribe'],
                'content' => $_POST['content'],
                'url' => $_POST['url'],
                'catsName' => $_POST['category'],


    );
//$insA->getTitle();
$insA->generateForm($inputs, 'POST');
$insA->getTititle();



if($_POST['submit']) {
    $db->getSimpleInsert();
    $message[] = 'ok';
    echo implode('<br>', $message);


}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="form-group">
                        <?php
                        $insA->generateForm($inputs, 'POST');
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
