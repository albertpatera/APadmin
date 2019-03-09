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
$req::setSession();
$req::requireFile('PridatClanek', 'core/inc/classes/');
$req::requireFile('Forms', 'core/inc/classes/');
$req::getDataFromSession("home", "Session log");
$req::requireFile("Db", 'core/inc/classes/');
$req::getDataFromSession("username", "Albert");
//$req::requireFile('index', 'core/model/view/MenuArticle/');


//initioalization post data

$req::issetField("content");
$req::issetField("title");
$req::issetField("shortDescribe");
$req::issetField("category");
$req::issetField("url");
$req::issetField("submit");


$message = array();

$insA = new \Core\Inc\Classes\PridatClanek('title', 'description', 'content', 'submit', 'images/test.jpg', 'Add Article');
$admin = new \Core\Inc\Classes\PridatClanek('administration', 'description', 'content', 'admSubmit', 'images/people.jpg', 'User Settings');
$db = new \Core\Inc\Classes\Db('localhost', 'root', '', 'test');
$db->getSimpleInsert();
//$insA->getField();

$inputs = array('title' => $_POST['title'],
                'shortDescribe' => $_POST['shortDescribe'],
                'content' => $_POST['content'],
                'url' => $_POST['url'],
                'catsName' => $_POST['category'],


    );

$inputs2 = array('id_user' => $_SESSION["username"],
    'name' => $_POST['name'],
    'desc' => $_POST['content'],
    'role' => $_POST['role'],
    'note' => $_POST['note'],


);
    $req::issetField('name');
    $req::issetField('content');
    $req::issetField('note');

    $admin->generateForm($admin, 'POST');
    $admin->getTititle();


//$insA->getTitle();
$insA->generateForm($inputs2, 'POST');


Debugger::fireLog('test');
Debugger::barDump($inputs, 'array value');
Debugger::barDump($_POST, 'post_data');
$insA->getTititle();

require_once 'core/model/view/MenuArticle/index.php';





if($_POST['submit']) {
    $db->getSimpleInsert();
    $message[] = 'ok';
    echo implode('<br>', $message);

    $req::flashMessage('success', 'Article succesfull added');


} else {
    $req::flashMessage('danger', 'Article failed');

}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="vendor/summernote/summernote.css">\
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="vendor/summernote/summernote.js"></script>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="form-group">
                        <?php
                        $insA->generateForm($inputs, 'POST');
                        $admin->generateForm($inputs2, 'POST');
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>



<script>
    $(document).ready(function () {
        $("input[name=content]").addClass("summernote");
        $(".summernote").summernote({
            height:50
        })

        $(".information").fadeIn(500).delay(5000).fadeOut(500);
    })
</script>
</body>
