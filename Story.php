<?php
    session_start();
?>
<html>
   <head>
      <script src="jquery-3.2.1.min.js"></script>
      <link rel="stylesheet" type="text/css" href ="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href ="font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href ="CSS/main.css">
      <link rel ="icon" href="CSS/image_projet/newFavi.png">
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <title> Tea Time</title>
      <meta charset="utf-8">
   </head>
   <body>
      <!--Begin header-->
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
                           <li class="collapse navbar-collapse"><a href="myAccount.html"> My Account<span class="sr-only">(current)</span></a></li>
                           <li><a href="advices.html"> Advices </a></li>
                           <li><a href="listProduct.html"> Our products </a></li>
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
         <div class="container-fluid">
            <div class="col-md-10 col-md-offset-1">
               <div class="centerText">
                  <p>The eldest son of a peasant family, Pavel Michailovitch Kousmichoff left home at the age of 14 to look for an employment in St Petersburg.
                     There he found work as a delivery boy for a tea merchant. The shop manager soon realized that the boy had enormous potential and taught him the art of blending tea.
                     Pavel continued to work for the tea merchant until his marriage to Alexandra, the daughter of a successful paper merchant.
                     His employer was so happy to see him marry into such a good family that he gave him a small teahouse on Sadovaïa Street.
                     And that is how the P. M. Kousmichoff teahouse started in 1867.
                     <img src="CSS/old1.jpg"
                  </p>
                  <p> Alexandra gave him six children, including his son Viatcheslav (1878) and his daughter Elisabeth (1880) for whom he created the special blend that soon became the tsar's tea, Bouquet de Fleurs.
                     By 1901 Pavel owned 11 teahouses as well as a large building big enough for his entire family.
                     He was very rich and his company was one of the three largest tea companies in Russia..
                     <img src="CSS/old3.jpg"
                   </p>
                  <p>In 1907, he sent his eldest son to London to learn about tea. Viatcheslav started by opening the company's British subsidiary, P.M. Kousmichoff and Sons at 11, Queen Victoria Street.
                     At the time, the City was the world capital of the tea trade, which helped Viatcheslav to become a master tea blender.
                     Viatcheslav returned to Russia and after the death of his father in 1908 took over the family business.
                     He successfully built up the company to own a total of 51 teahouses in all major cities of Russia.
                     <img src="CSS/old2.jpg"
                  </p>
                  <p>In 1916, sensing disaster, Viatcheslav transferred part of his fortune to the company's London office and in 1917 opened a workshop in Paris, the Maison Tea Time . While he spent most of his time in Paris, his family remained in Saint Petersburg and on the eve of the Revolution, without realizing how right his instincts were, he decided to send them spend the summer in the Caucasus just as the Revolution broke out. As the Reds moved south Viatcheslav organized his family's escape, first to Constantinople and then to Paris in 1920.
                  </br>
                  <img src="CSS/family.jpg" </p>
                  <p>In Paris, Viatcheslav and his wife lived the life of the wealthy with their three children, Constantin, Nadia and Vera.
                     The children had tutors and enjoyed sport and music, Constantin and Nadia playing the violin and Vera the piano.
                     Vera attended the Paris Conservatory where she met Rachmaninov and went on to become a famous opera singer.
                  </p>
                  <p>The family prospered during the interwar years, opening offices in New York , Hamburg and Constantinople .
                     However, Viatcheslav decided to settle his main business in Berlin since there was a large Russian community there.
                     Viatcheslav Kousmichoff died just after World War II in 1946 leaving his son Constantin to take over a family business much weakened by the war years. But Constantin didn't have the same business acumen as his father or grandfather. He was a man who loved life and burned the candle at both ends. An artist and a tea lover, he just didn't understand figures.
                     On the brink of bankruptcy in 1972 he sold the business for a pittance.During the years that followed, the Kousmichoff company continued to sell Tea Time teas with uneven success.
                     Like Constantin, the people who had bought the company were artistic and had a certain understanding of flavors, but their management skills left a lot to be desired.
                  </p>
                  <p>In 2003, Kousmichoff was bought by the Orebi brothers who came from a long line of commodity merchants.
                     Having traded cotton in the 19th century, non-ferrous metals in the first part of the 20th century, the Orebi family decided in 1962 to focus on cocoa and coffee‚ a move that naturally led them to tea.
                     They took up the challenge to carry on the traditions of Pavel, Viatcheslav and Constantin Kousmichoff and to develop an international reputation for the Tea Time Tea brand.
                  </p>
               </div>
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
