<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script src="./vendor/summernote/summernote.js"></script>

    
<nav class="navbar fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://albertpatera.cz">Albert Patera | Full Stack vývojář</a>
  </div>
</nav>

<?php
use Tracy\Debugger;


//require_once ("")

define('ROOT_DIR', __DIR__);
define('WWW_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR);
define("BASE_DIR", ROOT_DIR .DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);
//define("BASE_DIR", ROOT_DIR .DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);

require_once 'core/inc/classes/WorkSpace.php';

require_once 'core/inc/classes/Db.php';

require 'vendor/autoload.php';
//require_once 'Tridy/PridatClanek.php';
;

//use Tracy\Debugger;
require_once 'core/inc/classes/Requestor.php';
require_once 'core/inc/classes/UrlEncoder.php';

$ws = new UrlEncoder();



//Debugger::enable();
$req = new \Core\Inc\Classes\Requestor_class();
$req::setSession();
//$req::requireFile('WorkSpace', 'core/inc/classes/');
$req::requireFile('Forms', 'core/inc/classes/');
$req::getDataFromSession("home", "Session log");
$req::requireFile("Db", 'core/inc/classes/');
$req::getDataFromSession("username", "Albert");
//$req::requireFile('index', 'core/model/view/MenuArticle/');
//var_dump($_SERVER['QUERY_STRING']);
//exit;

//initioalization post data

$req::issetField("content");
$req::issetField("title");
$req::issetField("shortDescribe");
$req::issetField("category");
$req::issetField("url");
$req::issetField("submit");


$message = array();
echo "<div class='ml-5 mb-4'>";
$insA = new \Core\Inc\Classes\WorkSpace('title', 'description', 'content', 'submit', 'images/people.jpg', 'Albert Patera - FullStack vývojář... :)');
$insA->authorDescriptionBio("<p>Dobrý den, mé jméno je <strong>Albert Patera</strong>. Zabývám se deveopingem všeho možného... :)
                            </p><p>Vystudoval jsem středné průmyslovou školu v Mladé Boleslavi.</p>.<br>
                            střední škola mi co se týče techniologií moc nedala. Maximálně tedy základy linuxu, který používámm dodnes<br>
                            Velký vhled na věci jsem dostal až praxí. <br> Podle mého názoru teorie je fajn, ovšem když jí nemíte přetavit v reálné věci, je to pak těžké. <br>
                            Nyní pracuji jako progrmátor již 4 rokem a musím říci, že jsm se hodně profesně posunul co se technologií týče.

");
echo "</div>";


$db = new \Core\Inc\Classes\Db('localhost', 'root', '', 'test');
$db->getSimpleInsert();
//$insA->getField();




    $req::issetField('name');
    $req::issetField('content');
    $req::issetField('note');

    //$admin->generateForm($admin, 'POST');
    //$admin->getTititle();


//$insA->getTitle();

echo "<div class='container-fluid'>";
echo "<div class='row'>";
echo "<div class='col-md-7'>";
//$insA->generateForm($inputs2, 'POST');

echo "</div>";
echo "</div>";
echo "</div>";


//Debugger::fireLog('test');
//Debugger::barDump($inputs, 'array value');
//Debugger::barDump($_POST, 'post_data');
$insA->getTititle();

require_once 'core/model/view/MenuArticle/index.php';



$loginForm = new \Core\Inc\Classes\Forms(null, "form-control text-primary ", "name", "ppppppppp", "legend", "value");
$loginForm->addLabel("login");
echo "<div class='col-md-7'>";
echo "<div class='form-group'>";
            $loginForm->addText("text", "form-control  ", "name", "Jméno: ");
            //$loginForm->addTextArea("submit", " summernote form-control", null, "form-control");
            $loginForm->addPassword("password", "form-control col-sm-4", "Zadejte heslo", "Zadejte heslo", "Zadejte heslo");

            $loginForm->addSubmit("submit", "Přihlásit se", "John Doe", "btn btn-primary col-sm-7 form-control ml-4 mb-5");
echo "</div>";
echo "</div>";
            //echo "<pre>";
//$loginForm->getLabel();
//var_dump($loginForm);
//echo "</pre>";
?>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Albert Patera - developer
          </h6>
          <p>
            Potřebujete poradit s vývojem webové aplikace nebo jí rovnou zrealizovat? <br>
            Mám pro Vás ideální řešení. <b>Pojďme do toho spolu</b>. Inovace a nápady jsou vítány. Za svou dlouholetou praxi jsem posbíral monoho zkušeností. <br>
            Vaše nápady proměním v realitu. 
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Kontakt
          </h6>
          <p><b>Albert Patera</b></p>
          <p><i class="fas fa-home me-3"></i>Donatellova 2002/8,<br> Praha 10 - Strašnice, <br> 100 00</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            albert.patera@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 420 605 911 406</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
     Copyright:
    <a class="text-reset fw-bold" href="https://albertpatera.cz" target="_blank">Albert Patera</a> || Pokud není uvedeno jinak, obsah je zakázáno kopírovat.
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->