<?php
    include("./PHP/dbFunctions.php");
    var_dump($_POST);
    if (empty($_POST["Name"]) || empty($_POST["Link"]) ||empty($_POST["Price"])  ||empty($_POST["Stock"])  ||is_numeric($_POST["Price"])==false ||  is_numeric($_POST["Stock"])==false )
    {
        include("errorInclude.html");
    }
    else
    {
        insertProduct($_POST["Name"], $_POST["Link"], $_POST["Price"], $_POST["Stock"]);
        include("addProduct.html");
    }
?>