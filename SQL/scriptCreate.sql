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


CREATE TABLE `product` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(50) NOT NULL,
 `link` varchar(50) NOT NULL,
 `price` int(11) NOT NULL,
 `stock` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1


--Script d'insertion de donnee
    -- insertion des admins

INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `Email`, `Admin`) VALUES (NULL,"Ella","Witenberg","0600000000","EWit","123","e.witten@teatime.com",true);

INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `Email`, `Admin`) VALUES (NULL,"Clement","Simon","0600000001","CSim","456","c.sim@teatime.com",true);

    --insertion des utilisateurs normaux

INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `Email`, `Admin`) VALUES (NULL,"Jean","Onche","0600000002","J_onche","789","jonche@jvc.com",false);

-- Script d'insertion de donnees dans la table produits

INSERT INTO `product`(`id`, `name`, `link`, `price`, `stock`) VALUES (NULL,"ceylan_tea","CSS/theOne.jpg",15,100)
INSERT INTO `product`(`id`, `name`, `link`, `price`, `stock`) VALUES (NULL,"white_tea","CSS/theTwo",15,100)
INSERT INTO `product`(`id`, `name`, `link`, `price`, `stock`) VALUES (NULL,"jasmin_tea","CSS/theThree",15,100)
