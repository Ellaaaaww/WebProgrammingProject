<?php
    include("./PHP/dbFunctions.php");

    //insertUser($_POST['Name'],$_POST['Surname'],$_POST['Phone'], $_POST['Login'],$_POST['Password'],$_POST['Phone']);
    resetdb();

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





    




    displayUsers();
    
    displayProducts()

?>


