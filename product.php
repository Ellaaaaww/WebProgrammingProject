<?php
require_once"dbFunctions.php"

class Product
{
  private $id;
  private $name;
  private $price;
  private $description;
  private $stock;
  private $link;

  public function _construct($id, $name, $price, $description, $stock, $link){
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->description = $description;
    $this->stock = $stock;
    $this->link = $link;
  }

  public read_record($id)
  {
    this->id = $id;
  }

  public afficher()
  {
    return "id:" .this->id. "<br /> name:" .this->name. "<br /> price:" .this->price. "<br /> description:" .this->description. "<br /> stock:" .this->stock. "<br /> link:" .this->link.";
  }


}
 ?>
