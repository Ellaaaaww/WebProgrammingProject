<?php include("header.php");
 ?>
       <!--Begin Core -->
       <div class="row">
          <h1 class="namePage">My account</h1>
          <div class="container-fluid" style="color : white">

            <?php

            if (empty($_SESSION["Name"]))
            {
                print("You are not connected");
            }
            else {
              print("Login:" .$_SESSION['Login']. "<br />");
              print("Name:" .$_SESSION['Name']. "<br />");
              print("Surname:" .$_SESSION['Surname']. "<br />");
              print("Phone Number:" .$_SESSION['Phone']. "<br />");
              print("Email:" .$_SESSION['Email']. "<br />");
            }

           ?>

          </div>
       </div>
       <!--End Core -->

       <?php include("footer.php"); ?>
