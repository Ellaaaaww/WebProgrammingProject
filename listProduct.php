<?php
    include("header.php");
    require_once("PHP/dbFunctions.php");
?>


      <!--Begin Core -->
      <div class="row" style ="color : white;">
          <div class="container-fluid">
      <h1 class="namePage">Products</h1>
     <br/>
      <?php
            $data = getAllProducts();
            foreach($data as $user)
            {
                ?>

                        <h1 class="namePage"><?php echo($user['name']);?> </h1>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-4">
                        <?php print('<img src="'.$user['link'].'" alt="CSS/PictureNotFound.jpg">');?>
                        <br />
                        <?php print('Description : <br /> '.$user['Description']. '<br /> Price : ' .$user['price']. '<br />Stock : '.$user['stock']);?>
                    </div>

                </div>
                <?php
            }
      ?>
            </div>
      <!--End Core -->

<?php include("footer.php");
       ?>
