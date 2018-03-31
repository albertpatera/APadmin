
<!DOCTYPE html>
<html lang="cs-cz">
<head>
    <meta charset="UTF-8">
    <title>Přidat článek</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <form method="POST" id="inslForm">
        <input type="submit" class="green-text text-darken-2" id="install">
    </form>
        <script src="app/ajax.js"></script>
        <footer></footer>

<script>
    var id = $("#id").val();

    $.ajax({
        type: "post", 
        dataType: "text",
        url: "install/install.php",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        
        

    })
    $("#install").click(function(e){
        e.preventDefault();
        $.ajax({
            url: "/src/APadmin/install/install.php",
            type: "POST",
            data: JSON.stringify({'data': 'filled'}),
            dataType: "json", 
            traditional: true,
            contentType: "application/json; charset=utf-8",
            
                
            

            //error: alert("error")

        })
    })
</script>
</body>
</html>

<?php
require_once("Tridy/Db.php");
require_once("Tridy/PridatClanek.php");
require_once("Tridy/getHTML.php");
require_once("Tridy/Db.php");
require_once("Tridy/Forms.php");

require_once("install/install.php");
$d = new Db("localhost", "root", "", "test");
$d->Check();

$d->getQuery('CREATE TABLE clanky(id INT, content VARCHAR(32))');
//$d->getQuery('DEFAULT CHARACTER SET utf8');
$d->checkQ();
//$d->checkQ();
$d->getQuery('DROP TABLE clanky');
$d->checkQ();
$d->getQuery('CREATE TABLE clanky(  id INT NOT NULL AUTO_INCREMENT, 
                                 title VARCHAR(32), 
                                  short_describe VARCHAR(32),
                                content VARCHAR(32), 
                                PRIMARY KEY(id) 
                                )');


$d->checkQ();


$f = new PridatClanek("nazev", "shortDescribe", "content", "submit", "https://unsplash.com/photos/5fNmWej4tAA", "Přidat článek");
//$d->getQuery("INSERT INTO clanky (title, short_describe, content) VALUES ('nazev', 'shortDescribe', $this->content)");
//$d->InsertQuery();
                    //$label, $class, $name, $type, $legend, $value
$forms = new Forms("jhbn", "hnjn", "nmbnm", "submit", "reg.form", "testing");
//$forms->addText('text', 'Jmeno:', 'firstname', 'btn btn-success');
$forms->addSubmit("submit", "Register !");
$forms->addGroup('register', 'Registration form');


$d->checkQ();

//$d->getQuery('INSERT INTO clanky VALUES(NULL, NULL, NULL,  NULL)');
//$d->checkQ();



$t = new getHTML("div", "wrapper");

//$t->getFirst();
$f->getField();
$f->getTititle();
$f->generateForm();
$f->getAction();
$f->Vypis();
$f->vlozZaznam();
$d->checkQ();

$f->JSCehecker();
$t->getLast();

?>
42