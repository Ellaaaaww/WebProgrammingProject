<?php

    include("./PHP/dbFunctions.php");
    require_once ("PHP/mail.php");

    if((empty($_POST['Name'])) || (empty($_POST['Surname']))  ||(empty($_POST['Phone'])) ||(empty($_POST['Login'])) ||(empty($_POST['Password']))||(empty($_POST['Email'])))
    {
        include("errorInclude.html");
    }
    else
    {
        insertUser($_POST['Name'],$_POST['Surname'], $_POST['Phone'], $_POST['Login'], $_POST['Password'], $_POST['Email']);
                $textEmail="Your Account has been created, your login is ".$_POST['Login'];

        send_email($_POST['Email'],"Your Account",$textEmail);
        include("accountCreated.html");
    }
?>