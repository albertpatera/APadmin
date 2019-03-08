<?php


 namespace Core\Inc\Classes;

 //include "PridatClanek.php";
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
        $this->imgCat = "<img src='images/test.jpg' style='width: 100%; height: 350px;' class='cats'>";
        $this->title = $title;
    }

    public function getAction()
    {
        echo "<a classes='btn btn-floating btn-large orange pulse'><i classes=\"material-icons\">border_color</i></a>";
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
    public function generateForm($input = array(), $method) {
        $form = '<form action="index.php" method="' .  $method .  '">';
        foreach ($input as $item => $value) {
            $form .= '<div class="col-md-4">';
            $form .= '<label for="te">' . $item .'</label>';
            $form .= '<p>';
                $form .= '<input type="text" class="form-control" name="' . $item . '">';
            $form .= '</p>';
            $form .= "</div>";
        }
        $form .= '<input type="submit" class="form-control btn-sm btn btn-primary " name="submit" value="POST to public">';
        $form .= '</form>';

        echo $form;
    }


    /*
     *  Funkce pro specifikaci nazvu admin. strankz
     *  @return Vrati hlavni nazev stranky
     *  @TODO funkce si bere parametry y predchozich funkci (nema svoje vlastni parametry parametry)
     *  @param params are given of previous funkction title (string)
     */
    public function getTititle()
    {
        $render ="<span style='width: 100%; height: 350px;'>". $this->imgCat . "</span>";
        echo $render;
        echo "<h1>" . $this->title. "</h1>";
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
        //include 'Db.php';

        if($_POST['submit']) {

          }
    }

    public function Vypis()
    {

    }



}