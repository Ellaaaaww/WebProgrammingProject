<?php
    require_once("product.php");
    require_once("tabProduct.php");




    function insertUser($name, $surname, $phone, $login, $pass, $email,$add,$cc)
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt = $db->prepare("INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `PasswordSalt`, `Email`, `Address`, `CreditCard`, `Admin`) VALUES (NULL,:name,:surname,:phone,:log,:mdp,:sel,:email,:add,:cc,false)");
        $salt = mcrypt_create_iv(32, MCRYPT_DEV_URANDOM);
        $pass = htmlspecialchars($pass);
        $encrypted_pw = crypt($pass,$salt);
        $stmt->bindParam(':name', htmlspecialchars($name));
        $stmt->bindParam(':surname', htmlspecialchars($surname));
        $stmt->bindParam(':phone', htmlspecialchars($phone));
        $stmt->bindParam(':log', htmlspecialchars($login));
        $stmt->bindParam(':sel', $salt);
        $stmt->bindParam(':mdp', $encrypted_pw);
        $stmt->bindParam(':email', htmlspecialchars($email));
        $stmt->bindParam(':cc', htmlspecialchars($cc));
        $stmt->bindParam(':add', htmlspecialchars($add));
        $stmt->execute();
    }





    function insertProduct($name, $link, $price, $stock, $description )
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt = $db->prepare("INSERT INTO `products`(`id`, `name`, `link`, `price`, `stock`, `Description`) VALUES (NULL,:name,:link,:price,:stock,:descri)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':link', $link);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':descri', $description);
        $stmt->execute();
    }


    function deleteUser($idUser)
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt = $db->prepare("DELETE FROM users WHERE id = :idUse");

        $stmt->bindParam(':idUse', $idUser);
        $stmt->execute();
    }


    function getAllUsers()
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $tabToReturn = array();
        $req = "SELECT * FROM USERS" ;
        foreach($db->query($req) as $row)
        {
            array_push($tabToReturn, $row);
        }
        return $tabToReturn;    
    }


    function getAllProducts()
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $tabToReturn = array();
        $req = "SELECT * FROM PRODUCTS" ;
  
        foreach($db->query($req) as $row)
        {
            array_push($tabToReturn, $row);
          /*  $newProduct = new product($row['id'], $row['name'], $row['link'], $row['price'], $row['stock'], $row['Description'] );
            $newProduct->affiche();
            $newProduct->ReadRecors(1);
*/


        }
        return $tabToReturn;    
    }




    function getAllProductsInBasket()
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $tabToReturn = array();
        $req = "SELECT * FROM productinbasket" ;
        foreach($db->query($req) as $row)
        {
            array_push($tabToReturn, $row);
        }
        return $tabToReturn;    
    }





    function insertProductinBasket($idProduct, $idBasket, $Quantity)
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt = $db->prepare("INSERT INTO `productinbasket`(`idProductInBasket`, `IdProduct`, `IdBasket`, `Quantity`) VALUES (NULL,:idp,:idb,:q)");
        $stmt->bindParam(':idp', htmlspecialchars($idProduct));
        $stmt->bindParam(':idb', htmlspecialchars($idBasket));
        $stmt->bindParam(':q', htmlspecialchars($Quantity));

        $stmt->execute();
    }


    function updatePriceBasket($idbasket, $price)
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt = $db->prepare("UPDATE `baskets` SET `price`=:price WHERE baskets.id = :id");
        $stmt->bindParam(':price', htmlspecialchars($price));
        $stmt->bindParam(':id', htmlspecialchars($idbasket));
        $stmt->execute();
    }
        function updateStock($newStock, $idP)
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt = $db->prepare("UPDATE `products` SET `stock`=:stock WHERE id = :id");
        $stmt->bindParam(':id', htmlspecialchars($idP));
        $stmt->bindParam(':stock', htmlspecialchars($newStock));
        $stmt->execute();
    }

    function updatePayed($idbasket)
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt = $db->prepare("UPDATE `baskets` SET `payes`=1 WHERE baskets.id = :id");
        $stmt->bindParam(':id', htmlspecialchars($idbasket));
        $stmt->execute();
    }


    function createBasket($idUser)
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt = $db->prepare("INSERT INTO `baskets`(`id`, `idUser`, `price`, `payed`) VALUES (NULL,:idU,0,false)");
        $stmt->bindParam(':idU', htmlspecialchars($idUser));
        $stmt->execute();
    }




    function deleteProduct($idProduct)
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt = $db->prepare("DELETE FROM products WHERE id = :idProd");

        $stmt->bindParam(':idProd', $idProduct);
        $stmt->execute();        
    }





    function getAllBaskets()
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $tabToReturn = array();
        $req = "SELECT * FROM BASKETS" ;
        foreach($db->query($req) as $row)
        {
            array_push($tabToReturn, $row);
        }
        return $tabToReturn;    
    }







    function connect($log, $mdp)
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt = $db->prepare("SELECT * FROM USERS WHERE (Login = ?)");
        $stmt->execute(array($log));
        $toCheckPassword = $stmt->fetchAll();
        
        if (empty($toCheckPassword))
        {
            return false;
        }
        else
        {
            $salt = $toCheckPassword[0]["PasswordSalt"];
            
            $encrypted_pw = crypt($mdp,$salt);
            $stmt = $db->prepare("SELECT * FROM USERS WHERE (Login = ?) AND (Password = ?);");
            $stmt->execute(array($log , $encrypted_pw));
            return($stmt->fetchAll());
        }

    }

    function getStockProductById($idProduct)
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $tabToReturn = array();
        $stmt = $db->prepare("SELECT stock from products WHERE id = ?");
        $stmt->execute(array($idProduct));
        return   ($stmt->fetchAll());
    }



    function getUserCurrentBasket($idUser)
    {

        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt = $db->prepare("SELECT BASKETS.IdUser as idUser, BASKETS.id as basketId FROM BASKETs , users WHERE( ( users.id = baskets.idUser ) and (baskets.payed = false) and (users.id = ?))");
        $stmt->execute(array($idUser));
        return ($stmt->fetchAll());
        

    }



    function resetdb()
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt= $db->prepare("DROP TABLE USERS");
        $stmt->execute();
        $stmt = $db->prepare("CREATE TABLE `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `Name` varchar(50) NOT NULL,
        `Surname` varchar(50) NOT NULL,
        `Phone` varchar(50) NOT NULL,
        `Login` varchar(50) NOT NULL,
        `Password` varbinary(32) NOT NULL,
        `PasswordSalt` varbinary(32) NOT NULL,
        `Email` varchar(50) NOT NULL,
        `Address` varchar(255) NOT NULL,
        `CreditCard` varchar(32) NOT NULL,
        `Admin` tinyint(4) NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1");
        $stmt->execute();
        $salt = mcrypt_create_iv(32, MCRYPT_DEV_URANDOM);
        $encrypted_pw = crypt("123",$salt);
        $stmt = $db->prepare('INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `PasswordSalt`, `Email`, `Address`, `CreditCard`, `Admin`) VALUES (NULL,"Ella","Witenberg","0600000000","EWit","'.$encrypted_pw.'","'.$salt.'","e.witten@teatime.com","quelquepart","12345678912345",true);');
        $stmt->execute();
        $salt = mcrypt_create_iv(32, MCRYPT_DEV_URANDOM);
        $encrypted_pw = crypt("456",$salt);
        $stmt = $db->prepare('INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `PasswordSalt`, `Email`, `Address`, `CreditCard`, `Admin`) VALUES (NULL,"Clement","Simon","0600000001","CSim","'.$encrypted_pw.'","'.$salt.'","c.sim@teatime.com","quelquepart","12345678912345",true);');
        $stmt->execute();
        $salt = mcrypt_create_iv(32, MCRYPT_DEV_URANDOM);
        $encrypted_pw = crypt("789",$salt);
        $stmt = $db->prepare('INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `PasswordSalt`, `Email`, `Address`, `CreditCard`, `Admin`) VALUES (NULL,"Jean","Onche","0600000002","J_onche","'.$encrypted_pw.'","'.$salt.'","jonche@jvc.com","quelquepart","12345678912345",false);');
        $stmt->execute();

        $stmt= $db->prepare("DROP TABLE PRODUCTS");
        $stmt->execute();

        $stmt = $db->prepare("CREATE TABLE `products` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(50) NOT NULL,
        `link` varchar(50) NOT NULL,
        `price` int(11) NOT NULL,
        `stock` int(11) NOT NULL,
        `Description` text NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1");
        $stmt->execute();
        $stmt = $db->prepare('INSERT INTO `products`(`id`, `name`, `link`, `price`, `stock`, `Description`) VALUES (NULL,"Ceylan tea","CSS/theOne.jpg",15,100,"This is a stong aroma of ceylan tea")');
        $stmt->execute();

        $stmt = $db->prepare('INSERT INTO `products`(`id`, `name`, `link`, `price`, `stock`, `Description`) VALUES (NULL,"White tea","CSS/theTwo.jpg",15,100,"This is a light white tea")');
        $stmt->execute();

        $stmt = $db->prepare('INSERT INTO `products`(`id`, `name`, `link`, `price`, `stock`, `Description`) VALUES (NULL,"Jasmin tea","CSS/theThree.jpg",15,100,"This is a stong jasmin tea")');
        $stmt->execute();
        $stmt= $db->prepare("DROP TABLE baskets");
        $stmt->execute();
        $stmt =$db->prepare("CREATE TABLE `baskets` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `idUser` int(11) NOT NULL,
        `price` int(11) NOT NULL,
        `payed` tinyint(1) NOT NULL, 
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1
        ");

        
        $stmt->execute();
        $stmt = $db->prepare('INSERT INTO `baskets`(`id`, `idUser`, `price`, `payed`) VALUES (NULL,3,30,true);');
        $stmt->execute();

        $stmt = $db->prepare('INSERT INTO `baskets`(`id`, `idUser`, `price`, `payed`) VALUES (NULL,3,45,false);');
        $stmt->execute();
        $stmt = $db->prepare('INSERT INTO `baskets`(`id`, `idUser`, `price`, `payed`) VALUES (NULL,1,0,false)');
        $stmt->execute();
        $stmt = $db->prepare('INSERT INTO `baskets`(`id`, `idUser`, `price`, `payed`) VALUES (NULL,2,0,false)');
        $stmt->execute();

        $stmt= $db->prepare("DROP TABLE productinbasket");
        $stmt->execute();
        $stmt =$db->prepare("CREATE TABLE `productinbasket` (
        `idProductInBasket` int(11) NOT NULL AUTO_INCREMENT,
        `IdProduct` int(11) NOT NULL,
        `IdBasket` int(11) NOT NULL,
        `Quantity` int(11) NOT NULL,
        PRIMARY KEY (`idProductInBasket`)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1"
        );
        $stmt->execute();
        $stmt = $db->prepare('INSERT INTO `productinbasket`(`idProductInBasket`, `IdProduct`, `IdBasket`, `Quantity`) VALUES (NULL,1,1,1)');
        $stmt->execute();
        $stmt = $db->prepare('INSERT INTO `productinbasket`(`idProductInBasket`, `IdProduct`, `IdBasket`, `Quantity`) VALUES (NULL,2,1,1)');
        $stmt->execute();

        $stmt = $db->prepare('INSERT INTO `productinbasket`(`idProductInBasket`, `IdProduct`, `IdBasket`, `Quantity`) VALUES (NULL,1,2,3)');
        $stmt->execute();


    }


?>
