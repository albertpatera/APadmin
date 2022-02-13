<?php


 namespace Core\Inc\Classes;

 //include "PridatClanek.php";
class WorkSpace
{
    /*
     * Deklarace argumentu + deklarace roli
     */


    
    public $MENU = array(
            'identificator' => 'addActicle'
    );

    public function __construct($nazev, $shortDesctibe, $content, $submit, $imgCat, $title)
    {
  //      Dbs::__construct('localhost', 'root', '', 'd124371_apczweb');
        $this->nazev = $nazev;
        $this->shortDescribe = $shortDesctibe;
        $this->content = $content;
        $this->submit = $submit;
        $this->imgCat = "<img src='$imgCat' style='width: 100%; height: 75%;' class='cats'>";
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

            $form .= '<div class="col-md-12">';

            $form .= '<label for="te">' . $item .'</label>';
            $form .= '<p>';
                $form .= '<input type="text" class="form-control summernote" name="' . $item . '" placeholder="' . $value . '">';
            $form .= '</p>';
            $form .= "</div>";

            if($item == "content") {

                $form .= '<textarea class="form-control summernote" name="' . $item . '"></textarea>';
            }
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
        echo "<h1 class='display-4 card card-heading text-primary'>" . $this->title. "</h1>";
        //echo "<div class"
        

        echo "<div class='card'>";
        echo "<div class='card-body' style='width: 750px!important;'>";
        echo $this->authorDescriptionBio("<p>Dobrý den, mé jméno je <strong>Albert Patera</strong>. Zabývám se deveopingem všeho možného... :)
        </p><p>Vystudoval jsem středné průmyslovou školu v Mladé Boleslavi.</p>.<br>
        střední škola mi co se týče techniologií moc nedala. Maximálně tedy základy linuxu, který používámm dodnes<br>
        Velký vhled na věci jsem dostal až praxí. <br> Podle mého názoru teorie je fajn, ovšem když jí nemíte přetavit v reálné věci, je to pak těžké. <br>
        Nyní pracuji jako programátor již 4 rokem a musím říci, že jsm se hodně profesně posunul co se technologií týče.
        Po vystduování střední školy jsem přesídlil do Prahy. podle mého názoru je zde více možností uplatnění, než na vesnici nebo v Mladé Boleslavi<br>
        <hr>
        <p>
            Nastoupil jsem do mého prvního zaměstnání a byl jsem docela, tehdy nemile, překvapen. Dosud jsem si myslel, že umím programovat. Postupem času jsem zjistil, že ve firmě se používají novější technologie a principy,<br>
            na které jsem nebyl dosud zvyklý. Musel jsem se naučit, jak používat externí knihovny a jak pracovat s verzovacím systémem GIT.<br>
            Tato firma pro mne byla dost dobrým odrazovým můstkem pro další působení v jiných firmách a zároveň jsem poznal, jak fungují firmy a jak se reálně programuje. 
        </p>
        <hr>

        Poté, jak šel čas, přestoupil jsem do další firmy, která pro mne byla určitým sklamánímn, co se použitých technologií týče a hlavně celkový pohled na věc. <br <br>
        Protože když vám 'CTO' řekne, že nemá rád OOP (oběktově orietované programování, tak zde je podle mě něco spatně :)). <br>
        GIT se zde nepoužíval a kód se testoval na živých webech. Samozřejmě odevza od klientů na sebe nemnachala dlouho čekat. NĚCO NEFUNGUJE.<br>
        <p> 
            Verzovací systém pro správu verzí jsem nasazoval v době mého odchodu. 
        </p>
         <hr>

         Mé další působiště byla ve firmě <b>Vltava Labe Média</b>, kde jsem se podílel na správě a <b>programování nových funkcí</b> pro online magazíny. <br>
         Postupem mého působení v této firmě jsem posbíeral spoustu <b>zkušenowstí jak například Docker, GIT a samozřejmě Linux</b>. Programovalo se zde v PHP Frameworku Symfony<br>
         a v <b>PHP frameworku NETTE</b>  
         Objevil jsem tajké technologii <b>DOCKER</b>, což je dobrý nástroj pro lokální vývoj webu. Možno napárovat jakoukoliv technologii. 
         <br>

         <hr>

");
echo "</div>";
echo "</iv>";
        
    }

    public function authorDescriptionBio($text) {
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo $text;
        echo "</div>";
        echo "</div>";
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