<?php
    include("./PHP/dbFunctions.php");
    var_dump($_POST);
    insertUser($_POST['Name'],$_POST['Surname'],$_POST['Phone'], $_POST['Login'],$_POST['Password'],$_POST['Phone']);
?>