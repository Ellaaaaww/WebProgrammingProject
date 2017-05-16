--Script génération de la table users



CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `Name` varchar(50) NOT NULL,
 `Surname` varchar(50) NOT NULL,
 `Phone` varchar(50) NOT NULL,
 `Login` varchar(50) NOT NULL,
 `Password` varchar(50) NOT NULL,
 `Email` varchar(50) NOT NULL,
 `Admin` tinyint(4) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
--Script création table produits


CREATE TABLE `products` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(50) NOT NULL,
 `link` varchar(50) NOT NULL,
 `price` int(11) NOT NULL,
 `stock` int(11) NOT NULL,
 `Description` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1

-- script création table paniers

CREATE TABLE `baskets` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `idUser` int(11) NOT NULL,
 `price` int(11) NOT NULL,
 `payed` tinyint(1) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1


-- script de création de la table intermédiaire


CREATE TABLE `productinbasket` (
 `idProductInBasket` int(11) NOT NULL AUTO_INCREMENT,
 `IdProduct` int(11) NOT NULL,
 `IdBasket` int(11) NOT NULL,
 `Quantity` int(11) NOT NULL,
 PRIMARY KEY (`idProductInBasket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1


--Script d'insertion de donnee
    -- insertion des admins

INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `Email`, `Admin`) VALUES (NULL,"Ella","Witenberg","0600000000","EWit","123","e.witen@teatime.com",true);

INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `Email`, `Admin`) VALUES (NULL,"Clement","Simon","0600000001","CSim","456","c.sim@teatime.com",true);

    --insertion des utilisateurs normaux

INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `Email`, `Admin`) VALUES (NULL,"Jean","Onche","0600000002","J_onche","789","jonche@jvc.com",false);

-- Script d'insertion de donnees dans la table produits

INSERT INTO `products`(`id`, `name`, `link`, `price`, `stock`, `Description`) VALUES (NULL,"ceylan_tea","CSS/theOne.jpg",15,100,"This is a stong aroma of ceylan tea")
INSERT INTO `products`(`id`, `name`, `link`, `price`, `stock`, `Description`) VALUES (NULL,"white_tea","CSS/theTwo.jpg",15,100,"This is a light white tea")
INSERT INTO `products`(`id`, `name`, `link`, `price`, `stock`, `Description`) VALUES (NULL,"jasmin_tea","CSS/theThree.jpg",15,100,"This is a stong jasmin tea")


--Script d'insertion du basket 

INSERT INTO `baskets`(`id`, `idUser`, `price`, `payed`) VALUES (NULL,3,30,true);
INSERT INTO `baskets`(`id`, `idUser`, `price`, `payed`) VALUES (NULL,3,45,false);


--script d'insertion de product in basket 
INSERT INTO `productinbasket`(`idProductInBasket`, `IdProduct`, `IdBasket`, `Quantity`) VALUES (NULL,1,1,1)
INSERT INTO `productinbasket`(`idProductInBasket`, `IdProduct`, `IdBasket`, `Quantity`) VALUES (NULL,2,1,1)
INSERT INTO `productinbasket`(`idProductInBasket`, `IdProduct`, `IdBasket`, `Quantity`) VALUES (NULL,1,2,3)