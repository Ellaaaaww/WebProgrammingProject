<?php

    include("header.php");
    include("./PHP/dbFunctions.php");
    $idProduct = $_GET['id'];
    $oldStock = getStockProductById($idProduct);
    $oldStock = $oldStock[0]["stock"];
    $newStock = $oldStock + $_POST['toAddStock'];
    updateStock($newStock, $_GET['id']);
?>
<!--Begin Core -->
      <div class="row">
         <h1 class="namePage">Products has been added</h1>
         <div class="row" style ="text-align: center;">
          <a href="database.php" >Return to the database administration system</a>
          </div>
      </div>
      <!--End Core -->

<?php include("footer.php");
 ?>
