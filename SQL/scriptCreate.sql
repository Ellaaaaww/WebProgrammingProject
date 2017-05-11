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
