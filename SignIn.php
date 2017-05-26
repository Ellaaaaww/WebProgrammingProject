<?php
        session_start();

    require_once ("PHP/dbFunctions.php");
    require_once ("PHP/mail.php");

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


        ?>


        <!DOCTYPE html>
<html>
   <head>
      <script src="jquery-3.2.1.min.js"></script>
      <link rel="stylesheet" type="text/css" href ="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href ="font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href ="CSS/main.css">
      <link rel ="icon" href="CSS/image_projet/newFavi.png">
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script type = "text/javascript" src = "Javascript/scriptTest.js"></script>
      <title> Tea Time</title>
      <meta charset="utf-8">

   </head>
   <body>
     <?php include("header.php");
      ?>
      <!--Begin core-->
      <div class="row">

         <h1 class="namePage">Connected</h1>
         <div style ="text-align : center">
            <a href="index.php">Return to menu</a>
         </div>

      </div>
      <!--End core-->
 <?php include("footer.php"); ?>
   </body>
</html>


































        <?php

    }
?>
