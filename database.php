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
                    echo('<td><a href="SuppUser.php?id='.$idUse.'">Delete</a></td>'); 
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





    displayUsers();
    ?>
    <a href="SignUp.html"> Add a user </a> <br /><br /><br />
    <?php
    displayProducts();
    ?>
    <a href="addTea.html"> Add a tea </a> <br /><br /><br />
    <?php
    displayBaskets();


    

?>

