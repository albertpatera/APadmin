<?php
/**
 * Created by PhpStorm.
 * User: alber
 * Date: 09.03.2019
 * Time: 18:27
 */

$MENU = array(
        "pridat clanek", "o projektu", "Autor", "kontakt"
);

//Declare the array
$flowers = array("Rose","Lili","Jasmine","Hibiscus","Tulip","Sun Flower","Daffodil","Daisy");
echo "The array is:\n";
//Prints the array
foreach($flowers as $flower){
    echo $flower . "\n";
}
echo substr_replace("Hello","world",0);
foreach ($MENU as $key => $value) {
    $test = "O projektu";
    echo str_replace($test, "_", 0);
    echo "<li style='list-style-type: none'><a href='#" . $key ."_" . $value .  "'>" . $value. "</a></li>";
}