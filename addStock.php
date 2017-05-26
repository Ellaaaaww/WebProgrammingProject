<?php
  include("header.php");
    include("./PHP/dbFunctions.php");
    $idProduct = $_GET['id'];
?>
<!--Begin Core -->
      <div class="row">
        <?php echo('<form action="confirmAddStock.php?id='.$_GET["id"].'" method="POST">');?>
         <h1 class="namePage">How much do you want to add</h1>
         <br />
         <div class="row">
            <div class="col-md-2 col-md-offset-5">
               <input value ="0" type="text" class="form-control" placeholder="newStock" id ="Password" required name ="toAddStock">
            </div>
         </div>
         <br />
         <div class="row">
            <div class="col-md-1 col-md-offset-5">
               <input type="submit" class="btn btn-default navbar-btn" id ='SubmitButton'>
            </div>
         </div>
         </form>
      </div>
      <!--End Core -->
      <?php include("footer.php"); ?>
