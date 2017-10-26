<?php

    $paswd = $_POST["password"];
    $hash = hash("sha1",  "$paswd");
    echo "<form action='test.php' method='POST'>";
    echo "<input type='password' name='password' placeholder='zadej heslo'>";
    echo "<input type='submit' name='submit' placeholder='Registrovat'>";
    if(isset($_POST["password"])) {
        echo $hash;
    }
?>