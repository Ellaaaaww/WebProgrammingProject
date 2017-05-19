<?php
  session_start();
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
             <?php
                if (empty($_SESSION['Surname']))
                {
                    ?>
                        <button type="button" class="btn btn-default " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="location.href='SignIn.html'"> Sign in</button>
                        <button type="button" class="btn btn-default " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="location.href='SignUp.html'"> Sign up</button>
                        <a href="basket.html"><i class="fa fa-shopping-basket" aria-hidden="true" style = "color : yellow;"></i></a>

                    <?php
                }
                else
                {
                    ?>
                        <button type="button" class="btn btn-default " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="location.href='logout.php'"> Logout</button>
                    <?php
                }
             ?>
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
                           <li class="collapse navbar-collapse"><a href="myAccount.php"> My Account<span class="sr-only">(current)</span></a></li>
                           <li><a href="advices.php"> Advices </a></li>
                           <li><a href="listProduct.php"> Our products </a></li>
                           <?php
                            if (!empty($_SESSION['Surname']))
                            {
                                if (intVal($_SESSION['Admin']) == 1)
                                {
                                    ?>
                                     <li><a href="database.php"> Database Administration </a></li>
                                    <?php
                                }

                            }

                            ?>
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
         <h1 class="namePage">Our location</h1>
         <div class="row">
            <div class="centerText">Our shop is situated at Villejuif at 11 Road Roger Morinet</div>
         </div>
         <div class="row">
            <div class="container-fluid">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.353842807508!2d2.362611480169708!3d48.79422498086055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673e0f4d0b29b%3A0x1fa1f8f92b5dad7!2s11+Rue+Roger+Morinet%2C+94800+Villejuif%2C+France!5e0!3m2!1sfr!2sca!4v1494018650489" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
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
                     <a href = "Story.php" >Story</a>
                     <br />
                     <a href="mailto:adresse@serveur.com">Contact us</a>
                  </div>
                  <div class = "col-md-4">
                     <h3 class = "footer">Find us</h3>
                     <br />
                     <a href = "ShopLocation.php">Our shop</a>
                     <br />
                     <a href = "premium.php" >Premium resailer</a>
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
