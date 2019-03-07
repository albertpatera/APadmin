 <?php

/**
 * Created by PhpStorm.
 * User: Albert Patera
 * Date: 07.10.2017
 * Time: 22:31
 */
/*
 * trida pro kompletni vypis admin. rozhrani
 * @param nazev (string) content (string) imgCat (string) title(string)
 * @return Kompletni vypis admin interface for added article
 */

 require_once 'Db.php';
 include "PridatClanek.php";
class PridatClanek
{
    /*
     * Deklarace argumentu + deklarace roli
     */

    private static $nazev;
    private static $shortDescribe;
    private static $content;
    private static $submit;
    private static $title;

    public function __construct($nazev, $shortDesctibe, $content, $submit, $imgCat, $title)
    {
  //      Dbs::__construct('localhost', 'root', '', 'd124371_apczweb');
        $this->nazev = $nazev;
        $this->shortDescribe = $shortDesctibe;
        $this->content = $content;
        $this->submit = $submit;
        $this->imgCat = "<img src='images/test.jpg' class='cats'>";
        $this->title = $title;
    }

    public function getAction()
    {
        echo "<a class='btn btn-floating btn-large orange pulse'><i class=\"material-icons\">border_color</i></a>";
    }

    /*
     * prirazeni
     * @return Pole potrebne pro methodu formulare
     * @TODO form action method POST
     *
     */
    public function getField() {
        $nazev = $_POST["nazev"];
        $content = $_POST["content"];
        $hortDescribe = $_POST["shortDescribe"];
        $submit = $_POST["submit"];

    }

    /*
     * Frunkce pro generovni formulare
     */
    public function generateForm() {
        echo $this->imgCat;
        echo "<form action='index.php' method='POST'>";
            echo "<input type='text' name='nazev' placeholder='name of article' id='title'><br>";
            echo "<textarea  class='materialize-textarea' type='text' name='shortDescribe' placeholder='shortDescribe of article'></textarea><br>";
            echo "<textarea class='materialize-textarea' type='text' name='content' placeholder='content'></textarea><br>";
            echo "<input type='submit' name='submit' value='Submit'><br>";
        echo "</form>";

    }


    /*
     *  Funkce pro specifikaci nazvu admin. strankz
     *  @return Vrati hlavni nazev stranky
     *  @TODO funkce si bere parametry y predchozich funkci (nema svoje vlastni parametry parametry)
     *  @param params are given of previous funkction title (string)
     */
    public function getTititle()
    {
        echo "<h1>" . $this->title. "<h1>";
    }

    /*
     * Funkce pro ulozeni dat do COOKIES pomoci session
     * @return Hodnota se ulozi do SESSION
     */
    public function JSCehecker()
    {
        ?>
            <script>
                    alert("title: " +$("#title").val(""));
            </script>
        <?php
    }

    
    public static function vlozZaznam()
    {
        include 'Db.php';

        if($_POST['submit']) {

          }
    }

    public function Vypis()
    {

    }



}