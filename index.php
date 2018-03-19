
<!DOCTYPE html>
<html lang="cs-cz">
<head>
    <meta charset="UTF-8">
    <title>Přidat článek</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
        <script src="app/ajax.js"></script>
        <footer></footer>
</body>
</html>

<?php
require_once("Tridy/Db.php");
require_once("Tridy/PridatClanek.php");
require_once("Tridy/getHTML.php");
require_once("Tridy/Db.php");
require_once("Tridy/Forms.php");
$d = new Db("localhost", "root", "", "test");
$d->Check();
$f = new PridatClanek("nazev", "shortDescribe", "content", "submit", "https://unsplash.com/photos/5fNmWej4tAA", "Přidat článek");
//$d->getQuery("INSERT INTO clanky (title, short_describe, content) VALUES ($this->nazev, $this->shortDescribe, $this->content)");
//$d->InsertQuery();

$forms = new Forms('jhbn', 'hnjn', 'nmbnm', "khkjn", "reg.form");
$forms->addText('text', 'Jmeno:', 'firstname', 'btn btn-success');
$forms->addGroup('register', 'Registration form');


$d->checkQ();



$t = new getHTML("div", "wrapper");

$t->getFirst();
$f->getField();
$f->getTititle();
$f->generateForm();
$f->getAction();
$f->Vypis();
$f->VlozZaznam();
$f->JSCehecker();
$t->getLast();

?>
