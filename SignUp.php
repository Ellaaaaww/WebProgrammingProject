<?php

    include("./PHP/dbFunctions.php");
    require_once ("PHP/mail.php");

    if((empty($_POST['Name'])) || (empty($_POST['Surname']))  ||(empty($_POST['Phone'])) ||(empty($_POST['Login'])) ||(empty($_POST['Password']))||(empty($_POST['Email'])))
    {
        include("errorInclude.html");
    }
    else
    {
        session_start();
        insertUser($_POST['Name'],$_POST['Surname'], $_POST['Phone'], $_POST['Login'], $_POST['Password'], $_POST['Email']);
                $textEmail="Your Account has been created, your login is ".$_POST['Login'];
    $isconnect = connect($_POST['Login'], $_POST['Password']);

        
        if(empty($isconnect[0]['Name']) ||$isconnect == false )
        {
            include ("errorConnection.html");
        }
        else
        {
            $_SESSION['id'] = $isconnect[0]['id'];
            $_SESSION['Name'] = $isconnect[0]['Name'];
            $_SESSION['Surname'] = $isconnect[0]['Surname'];
            $_SESSION['Phone'] = $isconnect[0]['Phone'];
            $_SESSION['Login'] = $isconnect[0]['Login'];
            $_SESSION['Password'] = $isconnect[0]['Password'];
            $_SESSION['Email'] = $isconnect[0]['Email'];
            $_SESSION['Admin'] = $isconnect[0]['Admin'];
        }

        send_email($_POST['Email'],"Your Account",$textEmail);
        include("accountCreated.html");
    }
?>