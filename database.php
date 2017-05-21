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
      <script src = "Javascript/formcontrol.js"></script>
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
      <!--End header-->      <!--Begin Core -->
      
      <?php
      if (!empty($_SESSION['Name']))
      {
          if ($_SESSION['Admin'] == 1)
          {
              ?>
              <div class="row">
         <div class="container-fluid">
            <h1 class="namePage">DB Admin</h1>
            <div class="col-md-6 col-md-offset-3" style="background-color : white;">
               <?php
                  include("./PHP/dbFunctions.php");
                  
                  
                  function displayUsers()
                  {
                      $Users = getAllUsers();
                      ?>
               <table>
                  <tr>
                     <td>
                        id
                     </td>
                     <td>
                        Name
                     </td>
                     <td>
                        Surname
                     </td>
                     <td>
                        Phone
                     </td>
                     <td>
                        Login
                     </td>
                     <td>
                        Password
                     </td>
                     <td>
                        Email
                     </td>
                     <td>
                        isAdmin
                     </td>
                     <td>
                        Delete User
                     </td>
                  </tr>
                  <?php
                     foreach($Users as $row)
                     {?>
                  <tr>
                     <td><?= $row['id']?></td>
                     <td><?= $row['Name']?></td>
                     <td><?= $row['Surname']?></td>
                     <td><?= $row['Phone']?></td>
                     <td><?= $row['Login']?></td>
                     <td><?= $row['Password']?></td>
                     <td><?= $row['Email']?></td>
                     <td><?= $row['Admin']?></td>
                     <?php 
                        $idUse = $row['id'];
                        echo('<td><a href="SuppUser.php?id='.$idUse.'" style = "color: blue">Delete</a></td>'); 
                        ?>
                  </tr>
                  <?php
                     }
                     ?>
               </table>
               <br />
               <?php
                  }
                  
                  
                  function displayProducts()
                  {
                      $Users = getAllProducts();
                      ?>
               <table>
                  <tr>
                     <td>
                        id
                     </td>
                     <td>
                        Name
                     </td>
                     <td>
                        Link
                     </td>
                     <td>
                        Price
                     </td>
                     <td>
                        Stock
                     </td>
                     <td>
                        Description
                     </td>
                    <td>
                        Delete product
                     </td>
                     <td>
                        Add Stock
                     </td>
                  </tr>
                  <?php
                     foreach($Users as $row)
                     {?>
                  <tr>
                     <td><?= $row['id']?></td>
                     <td><?= $row['name']?></td>
                     <td><?= $row['link']?></td>
                     <td><?= $row['price']?></td>
                     <td><?= $row['stock']?></td>
                     <td><?= $row['Description']?></td>
                     <?php 
                        $idUse = $row['id'];
                        echo('<td><a href="SuppProduct.php?id='.$idUse.'" style = "color: blue">Delete</a></td>'); 
                    ?>            
                    <?php 
                        $idUse = $row['id'];
                        echo('<td><a href="addStock.php?id='.$idUse.'" style = "color: blue">Add Stock</a></td>'); 
                    ?>      
                  </tr>
                  <?php
                     }
                     ?>
               </table>
               <br />
               <?php
                  }




















                  
                  
                  function displayBaskets()
                  {
                      $Users = getAllBaskets();
                  
                      ?>
               <table>
                  <tr>
                     <td>
                        id
                     </td>
                     <td>
                        idUser
                     </td>
                     <td>
                        price
                     </td>
                     <td>
                        payed
                     </td>
                  </tr>
                  <?php
                     foreach($Users as $row)
                     {?>
                  <tr>
                     <td><?= $row['id']?></td>
                     <td><?= $row['idUser']?></td>
                     <td><?= $row['price']?></td>
                     <td><?= $row['payed']?></td>
                  </tr>
                  <?php
                     }
                     ?>
               </table>
               <br />
               <?php
                  }
                  
                  


                  function displayProductsInBasket()
                  {
                      $Users = getAllProductsInBasket();

                      ?>
               <table>
                  <tr>
                     <td>
                        idProductInBasket
                     </td>
                     <td>
                        IdProduct
                     </td>
                     <td>
                        IdBasket
                     </td>
                     <td>
                        Quantity
                     </td>
                  </tr>
                  <?php
                     foreach($Users as $row)
                     {?>
                  <tr>
                     <td><?= $row['idProductInBasket']?></td>
                     <td><?= $row['IdProduct']?></td>
                     <td><?= $row['IdBasket']?></td>
                     <td><?= $row['Quantity']?></td>
                               
                  </tr>
                  <?php
                     }
                     ?>
               </table>
               <br />
               <?php
                  }


                  
                  
                  
                  displayUsers();
                  ?>
               <a href="SignUp.html"> Add a user </a> <br /><br /><br />
               <?php
                  displayProducts();
                  ?>
               <a href="addTea.html"> Add a tea </a> <br /><br /><br />
               <?php
                  displayBaskets();
                  displayProductsInBasket();
                  
                  
                  
                  
                  ?>
            </div>
         </div>
      </div>
              <?php
          }
     
      }
      
      ?>
      <!--End Core -->
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