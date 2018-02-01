<?php
//icecream.php

//bowl
$myItem = new Item(1, "Bowl","Our bowl comes with 1 ice cream scoop - extra scoops and topings to be added", 4.99);
$myItem->addExtra("Scoop");
$myItem->addExtra("Caramel Sauce");
$myItem->addExtra("Hot Fugde");
$myItem->addExtra("Peanut Crumbs");
$myItem->addExtra("Almond Crumbs");
$myItem->addExtra("Oreo Crumbs");
$myItem->addExtra("Wipping Cream");
$myItem->addExtra("Cherry");
$items[] = $myItem;

//sugar cone
$myItem = new Item(2, "Sugar Cone","Our sugar cone come with 1 ice cream scoop - extra scoops and topings to be added", 5.99);
$myItem->addExtra("Scoop");
$myItem->addExtra("Caramel Sauce");
$myItem->addExtra("Hot Fugde");
$myItem->addExtra("Peanut Crumbs");
$myItem->addExtra("Almond Crumbs");
$myItem->addExtra("Oreo Crumbs");
$myItem->addExtra("Wipping Cream");
$myItem->addExtra("Cherry");
$items[] = $myItem;

//ice cream sandwich
$myItem = new Item(3, "Ice Cream Sandwich", "On our ice cream sandwich you get the chance to choose your own cookie-from our cookie selection -  and ice cream. Some topings are avaliable as well.", 6.99);
$myItem->addExtra("Peanut Crumbs");
$myItem->addExtra("Almond Crumbs");
$myItem->addExtra("Oreo Crumbs");
$items[] = $myItem;

//sundae 
$myItem = new Item(4, "Sundae", "Our sunday is perfection. 2 ice cream scoops, chocolate or caramel sauce, chocolate or rainbow sprinkles, whiphed cream, and a cherry on top. - Extras topping are avaliable.", 8.99);
$myItem->addExtra("Sprinkle - Chocolate or Rainbow");
$myItem->addExtra("Peanut Crumbs");
$myItem->addExtra("Almond Crumbs");
$myItem->addExtra("Oreo Crumbs");
$myItem->addExtra("Hot Fugde");
$items[] = $myItem;


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

?> <!--END OF PHP-->

<!DOCTYPE html>
<html>
    
<head>
<meta charset="UTF-8">
<title>Ice Cream Menu</title>
<link rel="stylesheet" type="text/css" href="main.css"/>
</head>
    
    <body>              
        <main>
            <h1>Product List</h1>
            
            <div1 class="bowl">  
                <h2>Ice Cream Menu</h2>
          
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">         
        	
                <h3>Bowl  4.99</h3>
                <p>Our bowl comes with 1 ice cream scoop - extra scoops and topings to be added</p>
                    
                <select id="dropdown" name="Scoops">                   
                <option value="0">--Number of Scoops--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
                    
                <select name="Extra" id="dropdown">
                <option value="0">--Toppings--</option>
                <option value="NONE">--NONE--</option>
                <option value="Caramel Sauce">Caramel Sauce</option>
                <option value="Hot Fugde">Hot Fugde</option>
                <option value="Peanut Crumbs">Peanuts Crumbs</option>
                <option value="Almond Crumbs">Almond Crumbs</option>
                <option value="Oreo Crumbs">Oreo Crumbs</option>
                <option value="Wipping Cream">Wipping Cream</option>
                <option value="Cherry">Cherry</option>
                </select>
                    
                <h3>Sugar Cone  5.99</h3>
                <p>Our sugar cone come with 1 ice cream scoop - extra scoops and topings to be added</p>
                    
                <select id="dropdown" name="Scoops">                   
                <option value="0">--Number of Scoops--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
                    
                <select name="Extra" id="dropdown">
                <option value="0">--Toppings--</option>
                <option value="NONE">--NONE--</option>
                <option value="Caramel Sauce">Caramel Sauce</option>
                <option value="Hot Fugde">Hot Fugde</option>
                <option value="Peanut Crumbs">Peanuts Crumbs</option>
                <option value="Almond Crumbs">Almond Crumbs</option>
                <option value="Oreo Crumbs">Oreo Crumbs</option>
                <option value="Wipping Cream">Wipping Cream</option>
                <option value="Cherry">Cherry</option>
                </select> 
                    
                <h3>Ice Cream Sandwich  6.99</h3>
                <p>On our ice cream sandwich you get the chance to choose your own cookie-from our cookie selection -  and ice cream. Some topings are avaliable as well.</p>
                    
                <select id="dropdown" name="Cookie">                   
                <option value="0">--Cookie?--</option>
                <option value="1">YES</option>
                <option value="2">NO</option>
                </select>
                    
                <select name="Extra" id="dropdown">
                <option value="0">--Toppings--</option>
                <option value="NONE">--NONE--</option>
                <option value="Peanut Crumbs">Peanuts Crumbs</option>
                <option value="Almond Crumbs">Almond Crumbs</option>
                <option value="Oreo Crumbs">Oreo Crumbs</option>
                </select> 
                    
                <h3>Sundae  8.99</h3>
                <p>Our sunday is perfection. 2 ice cream scoops, chocolate or caramel sauce, chocolate or rainbow sprinkles, whiphed cream, and a cherry on top. - Extras topping are avaliable.</p>
                    
                <select id="dropdown" name="Sauce">                   
                <option value="0">--Sauce--</option>
                <option value="NONE">--NONE--</option>
                <option value="Chocolate Sauce">Chocolate Sauce</option>
                <option value="Caramel Sauce">Caramel Sauce</option>
                </select>
                    
                <select name="Sprinkles" id="dropdown">
                <option value="0">--Sprinkles--</option>
                <option value="NONE">--NONE--</option>
                <option value="Sprinkle - Chocolate">Sprinkle - Chocolate</option>
                <option value="Sprinkle - Rainbow Crumbs">Sprinkle - Rainbow</option>
                </select>
                
                <select name="Extra" id="dropdown">
                <option value="0">--Toppings--</option>
                <option value="NONE">--NONE--</option>
                <option value="Peanut Crumbs">Peanuts Crumbs</option>
                <option value="Almond Crumbs">Almond Crumbs</option>
                <option value="Oreo Crumbs">Oreo Crumbs</option>
                <option value="Hot Fudge">Hot Fudge</option>
                </select> 
                
                <p><input id="submit" type="submit"></p>
                </form>
                </br>
        
            </div1> <!-- END DIV -->
            
        <footer>
            <ul>
                <li>&copy; Copywright 2017</li>
                <li>All Rights Reserved</li>
                <li>Web Design by grp4_p2</li>
            </ul> <!--...index/html-->
        </footer>
            
    </main>
    </body>
</html>            