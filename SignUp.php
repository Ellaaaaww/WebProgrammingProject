<?php

    include("./PHP/dbFunctions.php");
    require_once ("PHP/mail.php");
    // Comment on les récupère coté php.
    // on appelle la method par utilisé coté HTML. $_POST ou $_GET
    // Ces deux methodes sont des tableaux associatifs avec les name défini coté html
    // Donc si coté html j'ai un champ qui s'appelle surname, avec une methode get. On le recupère avec $_GET['surname'];
    if((empty($_POST['Name'])) || (empty($_POST['Surname']))  ||(empty($_POST['Phone'])) ||(empty($_POST['Login'])) ||(empty($_POST['Password']))||(empty($_POST['Email']))   || (empty($_POST['Card']))|| (empty($_POST['Address']))  )
    {
        include("errorInclude.html");
    }
    else
    {
        // Une session est initialisée dans chaque page par la commande session_start();
        session_start();
        insertUser($_POST['Name'],$_POST['Surname'], $_POST['Phone'], $_POST['Login'], $_POST['Password'], $_POST['Email'],$_POST['Card'],$_POST['Address']);
        $textEmail="Your Account has been created, your login is ".$_POST['Login'];
        $isconnect = connect($_POST['Login'], $_POST['Password']);

        
        if(empty($isconnect[0]['Name']) ||$isconnect == false )
        {
            include ("errorConnection.html");
        }
        else
        {
            // N'oubliez pas d'afficher la structure de données d'une variable avec la commande var_dump EXEMPPLE (var_dump($isconnect))
            // Une session est un tableau assosiatif de données (un peu comme le get et le post)
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
        include("accountCreated.php");
    }
?>