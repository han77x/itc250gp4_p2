<?php

//bowl
$myItem = new Item(1, "Bowl", "Our bowl comes with 1 ice cream scoop - extra scoops and topins to be added", 4.99);
$myItem->addExtra("Scoop");
$myItem->addExtra("Sprinkle - Chocolate or Rainbow");
$myItem->addExtra("Caramel Sauce");
$myItem->addExtra("Chocolate Sauce");
$myItem->addExtra("Hot Fugde");
$myItem->addExtra("Peanuts Crumbs");
$myItem->addExtra("Almond Crumbs");
$myItem->addExtra("Oreo Crumbs");
$myItem->addExtra("Wipping Cream");
$myItem->addExtra("Cherry");

//sugar cone
$myItem = new Item(2, "Sugar Cone", "Our sugar cone come with 1 ice cream scoop - extra scoops and topins to be added", 5.99);
$myItem->addExtra("Scoop");
$myItem->addExtra("Sprinkle - Chocolate or Rainbow");
$myItem->addExtra("Caramel Sauce");
$myItem->addExtra("Chocolate Sauce");
$myItem->addExtra("Hot Fugde");
$myItem->addExtra("Peanuts Crumbs");
$myItem->addExtra("Almond Crumbs");
$myItem->addExtra("Oreo Crumbs");
$myItem->addExtra("Wipping Cream");
$myItem->addExtra("Cherry");

//ice cream sandwich
$myItem = new Item(3, "Ice Cream Sandwich", "On our ice cream sandwich you get the chance to choose your own cookie-from our cookie selection -  and ice cream. Some topings are avaliable as well.", 6.99);
$myItem->addExtra("Sprinkle - Chocolate or Rainbow");
$myItem->addExtra("Peanuts Crumbs");
$myItem->addExtra("Almond Crumbs");
$myItem->addExtra("Oreo Crumbs");

//sundae 
$myItem = new Item(4, "Sundae", "Our sunday is perfection. 2 ice cream scoops, chocolate or caramel sauce, chocolate or rainbow sprinkles, whiphed cream, and a cherry on top. - Extras topping are avaliable.", 8.99);
$myItem->addExtra("Peanuts Crumbs");
$myItem->addExtra("Almond Crumbs");
$myItem->addExtra("Oreo Crumbs");
$myItem->addExtra("Hot Fugde");


class Item{
	public $ID = 0;
	public $Name = '';
	public $Description = '';
	public $Price = 0;
	public $Extras = array();//variable that can store many things
	
	public function __construct($ID, $Name, $Description, $Price){
		//contructor is the birth of the object.$this->WHATEVER = WHATEVER;
		$this->ID = (int)$ID;
		$this->Name = $Name;
		$this->Description = $Description;
		$this->Price = (float)$Price;
	
	}//end of contructor
	
	public function addExtra($extra){
		$this->Extras[] = $extra;
	}//end addExtra function
	
}//end class


?>