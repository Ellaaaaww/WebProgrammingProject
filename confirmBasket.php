<?php
    include("PHP/dbFunctions.php");
    session_start();
    var_dump($_POST);
    echo("<br />_____________________________________________________________________________<br />");
    var_dump($_SESSION);
    echo("<br />_____________________________________________________________________________<br />");
    
    var_dump(getUserCurrentBasket(intval($_SESSION['id'])));
?>