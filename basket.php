<?php
    include("header.php");
    require_once("PHP/dbFunctions.php");
?>

          <h1 class="namePage">My basket</h1>
          <form method ="POST" action ="confirmBasket.php">
        <?php

            $products = getAllProducts();
            foreach($products as $product)
            {
                ?>
                <div class="row" style="color: white">
                    <div class="container-fluid">
                        <div class="col-md-2 col-md-offset-5">
                            Name : <?php echo($product['name']." <br />");?>
                            Price : <?php echo($product['price']."$ <br />");?>
                            Stock : <?php echo($product['stock']." units left <br />");?>
                            <input type="text" class="form-control" value ="0" required placeholder=<?php echo($product['name']); ?> id =<?php echo($product['id']);?> name =<?php echo($product['id']);?>>
                        </div>
                    </div>
                </div>
                <?php
            }

          ?>
          <br />
          <div class="row">
              <div class="container-fluid">
                <div class="col-md-2 col-md-offset-5">
                    <input type="submit" class="form-control" placeholder=<?php echo($product['name']); ?> id =<?php echo($product['id']);?> >
                </div>
            </div>
          </div>
          </form>

<?php include("footer.php"); ?>
