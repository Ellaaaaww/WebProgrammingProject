<?php include("header.php");
 ?>

<!--Begin Core -->

      <?php
      if (!empty($_SESSION['Name']))
      {
          if ($_SESSION['Admin'] == 1)
          {
              ?>
              <div class="row">
         <div class="container-fluid">
            <h1 class="namePage">DB Admin</h1>
            <div class="col-md-6 col-md-offset-3" style="background-color : #303030; color : dodgerblue">
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
      <?php include("footer.php");
       ?>
