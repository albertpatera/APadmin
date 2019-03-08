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

 include ("Db.php");
class PridatClanek extends Db
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
        Db::__construct('localhost', 'root', '', 'd124371_apczweb');
        $this->nazev = $nazev;
        $this->shortDescribe = $shortDesctibe;
        $this->content = $content;
        $this->submit = $submit;
        $this->imgCat = "<img src='images/test.jpg' style='width: 100%; height: 350px; z-index: 50;' class='cats'>";
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
    public function getField($input = array()) {

        foreach ($input as $item => $value)  {
            print_r($input);
        }

    }

    /*
     * Frunkce pro generovni formulare
     */
    public function generateForm($arr = array(), $method) {
        //echo $this->imgCat;

        $form = '<form  class="md-form" action="index.php" method="' . $method . '">';
            $form .= '<div class="file-fields">';
        foreach ($arr as $item => $values)
        {


            $form .= '';

           $form .= '<span> ' . $item. '</span>';
                $form .=  '<input type="text" name="' . $item . '"><br>';

        }



        $form .= '</form>';
        $form .= '</div>';

        echo '<input type="submit" name="submit">';

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
        echo "<h2 class='card card-header display-4 text-warning'>" . $this->title. "</h2>";
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

    public function getTitle() {
        echo $this->imgCat;
    }



}