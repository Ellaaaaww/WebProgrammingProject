<?php





    function insertUser($name, $surname, $phone, $login, $pass, $email)
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt = $db->prepare("INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `Email`, `Admin`) VALUES (NULL,:name,:surname,:phone,:log,:mdp,:email,false)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':log', $login);
        $stmt->bindParam(':mdp', $pass);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }





    function getUserLogMdp($log, $mdp)
    {
        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');
        $stmt= $db->prepare();
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
        `Password` varchar(50) NOT NULL,
        `Email` varchar(50) NOT NULL,
        `Admin` tinyint(4) NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1");
        $stmt->execute();
        $stmt = $db->prepare('INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `Email`, `Admin`) VALUES (NULL,"Ella","Witenberg","0600000000","EWit","123","e.witten@teatime.com",true);');
        $stmt->execute();

        $stmt = $db->prepare('INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `Email`, `Admin`) VALUES (NULL,"Clement","Simon","0600000001","CSim","456","c.sim@teatime.com",true);');
        $stmt->execute();

        $stmt = $db->prepare('INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `Email`, `Admin`) VALUES (NULL,"Jean","Onche","0600000002","J_onche","789","jonche@jvc.com",false);');
        $stmt->execute();

        $stmt= $db->prepare("DROP TABLE PRODUCTS");
        $stmt->execute();

        $stmt = $db->prepare("CREATE TABLE `products` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(50) NOT NULL,
        `link` varchar(50) NOT NULL,
        `price` int(11) NOT NULL,
        `stock` int(11) NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1");
        $stmt->execute();
        $stmt = $db->prepare('INSERT INTO `products`(`id`, `name`, `link`, `price`, `stock`) VALUES (NULL,"ceylan_tea","CSS/theOne.jpg",15,100)');
        $stmt->execute();

        $stmt = $db->prepare('INSERT INTO `products`(`id`, `name`, `link`, `price`, `stock`) VALUES (NULL,"white_tea","CSS/theTwo",15,100)');
        $stmt->execute();

        $stmt = $db->prepare('INSERT INTO `products`(`id`, `name`, `link`, `price`, `stock`) VALUES (NULL,"jasmin_tea","CSS/theThree",15,100)');
        $stmt->execute();


    }


?>
