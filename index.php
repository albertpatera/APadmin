<?php
require 'vendor/autoload.php';
//require_once 'Tridy/PridatClanek.php';

use Tracy\Debugger;


Debugger::enable();
require_once 'Tridy/PridatClanek.php';
require_once 'Tridy/Db.php';
$message = array();
$insA = new PridatClanek('title', 'description', 'content', 'submit', 'image/test.png', 'Add Article');
$db = new Db('localhost', 'root', '', 'test');
$db->getSimpleInsert();
//$insA->getField();

$inputs = array('title' => $_POST['title'],
                'shortDescribe' => $_POST['shortDescribe'],
                'content' => $_POST['content'],
                'url' => $_POST['url'],
                'catsName' => $_POST['category'],
                'textarea' => $_POST['textarea']

    );
$insA->getTitle();
$insA->generateForm($inputs, 'POST');

$DB = new Db('localhost', 'root', '', 'test');
$db->generateInput();


$DB->initPDO();
$DB->getSimpleInsert();

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
            <div class="col-md-8">
                <div class="card">
                    <?php
                        $insA->generateForm($inputs, 'POST');
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
