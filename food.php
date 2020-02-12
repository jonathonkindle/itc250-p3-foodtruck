<?php

$myItem = new Item('Tacos','Our tacos are awesome <br>Price: $7.95', 7.95);
// $myItem->addExtra("Sour Cream");
// $myItem->addExtra("Cheese");
// $myItem->addExtra("Guacamole");
$items[] = $myItem;

$myItem = new Item('Sundae','Our Sundaes are awesome  <br>Price:  $4.95', 4.95);
// $myItem->addExtra("Sprinkles");
// $myItem->addExtra("Chocolate Sauce");
// $myItem->addExtra("Nuts");
$items[] = $myItem;

$myItem = new Item('Salad','Our Salads are awesome <br>Price:  $3.95', 3.95);
// $myItem->addExtra("Croutons");
// $myItem->addExtra("Bacon");
// $myItem->addExtra("Lemon Wedges");
// $myItem->addExtra("Avocado");
$items[] = $myItem;

$myItem = new item('Cheesecake','Our cheesecake are awesome <br>Price: $10.95', 10.95);
$items[] = $myItem;
$myItem = new item('Ice Cream','Our ice cream are awesome <br>Price:  $2.95', 2.95);
$items[] = $myItem;

class Item {
    public $name = '';
    public $description = '';
    public $price = 0;
    public $quantity = 0;

    public function __construct($name, $description, $price) {
        $this->name = $name;  
        $this->description = $description; 
        $this->price = $price; 
    }

    public function addExtra($Extra) {
        $this->Extras[] = $Extra;
    }
}#end of item class