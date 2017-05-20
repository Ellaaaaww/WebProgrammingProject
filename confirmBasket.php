<?php
    session_start();
    include("PHP/dbFunctions.php");
    $tabId = array();
    foreach($_POST as $id)
    {
        array_push($tabId,$id); 
    }
    
    $CurrentBasketData = getUserCurrentBasket(intval($_SESSION['id']));

    $idbasket = $CurrentBasketData[0]["basketId"];

    $tabProducts = getAllProducts();
    $sizeTab = sizeof($tabId);
    //To remove products which are not availables
    foreach($tabProducts as $product)
    {
        for ($i = 1; $i<=$sizeTab; $i ++)
        {
            if($product["id"] == $i)
            {
                if($_POST[$i] > $product["stock"])
                {
                    include("errorStock.html");
                    exit();
                }
            }
        }
    }
    $price = 0;
    foreach($tabProducts as $product)
    {
        for ($i = 1; $i<=$sizeTab; $i ++)
        {
            if($product["id"] == $i)
            {
                $price = $price + $product["price"] * $_POST[$i];
                insertProductinBasket($product["id"],$idbasket, $_POST[$i]);
            }
        }
    }
    print($price);




?>