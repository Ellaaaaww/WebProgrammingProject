
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

                      <?php
                  }
                  else
                  {
                      ?>
                          <button type="button" class="btn btn-default " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="location.href='logout.php'"> Logout</button>
                          <a href="basket.php"><i class="fa fa-shopping-basket" aria-hidden="true" style = "color : yellow;"></i></a>

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
