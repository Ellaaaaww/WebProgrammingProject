<?php
    include("header.php");
    include("./PHP/dbFunctions.php");
    $idProduct = $_GET['id'];
    deleteProduct($idProduct);
?>
      <!--Begin Core -->
      <div class="row">
         <h1 class="namePage">The product has been deleted</h1>
         <div class="row" style ="text-align: center;">
          <a href="database.php" >Return to the database administration system</a>
          </div>
      </div>
      <!--End Core -->
<?php
include("footer.php"); ?>
