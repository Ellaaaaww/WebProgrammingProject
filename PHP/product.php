<?php
class product
{
    public $_id;
    public $_name;
    public $_link;
    public $_price;
    public $_stock;
    public $_desc;

    public function __construct($id, $name, $link, $price, $stock,$desc)
    {

        $this->_id=$id;
        $this->_name=$name;
        $this->_link = $link;
        $this->_price = $price;
        $this->_stock = $stock ;
        $this->_desc = $desc;
    }
    public function affiche()
    {
        print ("Here the begin affiche function of a product");
        print("id : " .$this->_id."<br />");
        print("name : " .$this->_name."<br />");
        print("link : " .$this->_link."<br />");
        print("price  : " .$this->_price."<br />");
        print("stock : " .$this->_stock."<br />");
        print("description : " .$this->_desc."<br />");
        print ("Here the end affiche function of a product <br />");


    }
    public function __toString()
    {
        return ("  id : ".$this->_id. "  name  : " .$this->_name. "  link : " .$this->_link."  price : ".$this->_price. "  stock  : " .$this->_stock. "  desc : " .$this->_desc . "<br />");
    }
    public function ReadRecors($id)
    {

        $db = new PDO('mysql:host=localhost:3306;dbname=concordiaproject', 'root', '');

        $req = "SELECT * FROM PRODUCTS WHERE id = ".$id ;
        foreach($db->query($req) as $row)
        {
            echo("Your recors is : ".$id);
            print("His name is : ".$row["name"]."<br />");
            print("His name is : ".$row["link"]."<br />");
            print("His name is : ".$row["price"]."<br />");
            print("His name is : ".$row["stock"]."<br />");
            print("His name is : ".$row["Description"]."<br />");
        }

    }

}
?>
