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


?>