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



--Script d'insertion de donnee
    -- insertion des admins

INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `Email`, `Admin`) VALUES (NULL,"Ella","Witenberg","0600000000","EWit","123","e.witten@teatime.com",true)

INSERT INTO `users`(`id`, `Name`, `Surname`, `Phone`, `Login`, `Password`, `Email`, `Admin`) VALUES (NULL,"Clement","Simon","0600000001","CSim","456","c.sim@teatime.com",true)

    --insertion des utilisaterus normaux
    