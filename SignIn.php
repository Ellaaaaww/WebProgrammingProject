<?php
        session_start();

    include ("PHP/dbFunctions.php");

    $isconnect = connect($_POST['Login'], $_POST['Password']);
    
    if(empty($isconnect[0]['Name']))
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
      <!--Begin header-->
      <header>
      <div class="row" >
         <div class="col-md-3 col-md-offset-9">
            <button type="button" class="btn btn-default " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="location.href='SignIn.html'"> Sign in</button>
            <button type="button" class="btn btn-default " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="location.href='SignUp.html'"> Sign up</button>
            <a href="basket.html"><i class="fa fa-shopping-basket" aria-hidden="true" style = "color : yellow;"></i></a>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 col-md-offset-4">
            <img src="CSS/teatime.png"
         </div>
      </div>
      </div>
      <!-- begin navbar -->
      <div class="row">
         <div class="col-md-10 col-md-offset-1">
            <div class="container-fluid">
               <nav class="navbar navbar-default" style="background-color: #301500;">
                  <div class="container-fluid">
                     <div class="col-md-9 col-md-offset-3">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                           <span class="icon-bar" ></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           </button>
                           <a class="navbar-brand" href="index.php">Tea Time </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                           <ul class="nav navbar-nav">
                           <li class="collapse navbar-collapse"><a href="myAccount.html"> My Account<span class="sr-only">(current)</span></a></li>
                           <li><a href="advices.html"> Advices </a></li>
                           <li><a href="listProduct.html"> Our products </a></li>
                        </div>
                     </div>
                     <!-- /.navbar-collapse -->
                  </div>
                  <!-- /.container-fluid -->
               </nav>
               <!-- end navbar -->
            </div>
         </div>
      </div>
    </header>
      <!--End header-->
      <!--Begin core-->
      <div class="row">
        
         <h1 class="namePage">Connected</h1>
         <div style ="text-align : center">
            <a href="index.php">Return to menu</a>
         </div>
         
      </div>
      <!--End core-->
      <!-- Begin footer -->
      <footer>
         <div class = "footer">
            <div class = "row">
               <div class = "container-fluid">
                  <div class = "col-md-4">
                     <h3 class = "footer">The house</h3>
                     <br />
                     <a href = "Story.html" >Story</a>
                     <br />
                     <a href="mailto:adresse@serveur.com">Contact us</a>
                  </div>
                  <div class = "col-md-4">
                     <h3 class = "footer">Find us</h3>
                     <br />
                     <a href = "ShopLocation.html">Our shop</a>
                     <br />
                     <a href = "premium.html" >Premium resailer</a>
                  </div>
                  <div class = "col-md-4">
                     <h3 class = "footer">Social network</h3>
                     <br />
                     <a href = "http://www.facebook.com" style =" color : #3B5998" target ="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> : Facebook </a>
                     <br />
                     <a href = "http://pinterest.com" style ="color : #C92228" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i> : Pinterest</a>
                     <br />
                     <a href = "http://youtube.com" style ="color : #C4302b" target ="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i> : Youtube </a>
                     <br />
                     <a href = "http://twitter.com" style =" color : #4099FF" target ="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i> : Twitter</a>
                     <br />
                  </div>
               </div>
            </div>
            <div class="copyrightText">
               <i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2017 Clément Simon, Ella Witenberg
               <br />
               The code is available on github <a href ="https://github.com/Ellaaaaww/WebProgrammingProject" target = "_blank"> <i class="fa fa-github" aria-hidden="true"></i></a>
            </div>
         </div>
      </footer>
      <!--End footer-->
   </body>
</html>


































        <?php

    }
?>