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
                    
                <select>
                <option selected="selected">Choose Number of Scoops</option>
        
                <?php
                
                $Bowlscoops = array("1","2","3","4","5");
                    
                foreach($Bowlscoops as $item){
                ?>
                <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
                <?php
                }

                ?>
                </select><!--END SELECT-->
                    
                <select>
                <option selected="selected">Choose Topping</option>
        
                <?php
                
                $Bowlextras = array("--None--","Caramel Sauce", "Hot Fugde", "Peanut Crumbs","Almond Crumbs","Oreo Crumbs","Wipping Cream","Cherry");
                    
                foreach($Bowlextras as $item){
                ?>
                <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
                <?php
                }

                ?>
                </select><!--END SELECT-->
                    
                <h3>Sugar Cone  5.99</h3>
                <p>Our sugar cone come with 1 ice cream scoop - extra scoops and topings to be added</p>
                    
                <select>
                <option selected="selected">Choose Number of Scoops</option>
        
                <?php
                
                $Sugarscoops = array("1","2","3","4","5");
                    
                foreach($Sugarscoops as $item){
                ?>
                <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
                <?php
                }

                ?>
                </select><!--END SELECT-->
                              
                <select>
                <option selected="selected">Choose Topping</option>
        
                <?php
                
                $Sugarextras = array("--None--","Caramel Sauce", "Hot Fugde", "Peanut Crumbs","Almond Crumbs","Oreo Crumbs","Wipping Cream","Cherry");
                    
                foreach($Sugarextras as $item){
                ?>
                <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
                <?php
                }

                ?>
                </select><!--END SELECT-->
                    
                <h3>Ice Cream Sandwich  6.99</h3>
                <p>On our ice cream sandwich you get the chance to choose your own cookie-from our cookie selection -  and ice cream. Some topings are avaliable as well.</p>
                
                <select>
                <option selected="selected">Cookie?</option>
        
                <?php
              
                $Sandcookie = array("YES","NO");
              
                foreach($Sandcookie as $item){
                ?>
                <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
                <?php
                }

                ?>
                </select><!--END SELECT-->
                    
                <select>
                <option selected="selected">Choose Topping</option>
        
                <?php
                
                $Sandextras = array("--None--","Peanut", "Almond Crumbs", "Oreo Crumbs");
                    
                foreach($Sandextras as $item){
                ?>
                <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
                <?php
                }

                ?>
                </select><!--END SELECT-->
                    
                <h3>Sundae  8.99</h3>
                <p>Our sunday is perfection. 2 ice cream scoops, chocolate or caramel sauce, chocolate or rainbow sprinkles, whiphed cream, and a cherry on top. - Extras topping are avaliable.</p>    
                    
                <select>
                <option selected="selected">Choose Sauce</option>
        
                <?php
                    
                $Sunsauce = array("--None--","Chocolate Sauce", "Caramel Sauce");
                
                foreach($Sunsauce as $item){
                ?>
                <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
                <?php
                }

                ?>
                </select><!--END SELECT-->
                    
                <select>
                <option selected="selected">Choose Sprinkles</option>
        
                <?php
                
                $Sunsprinkles = array("--None--","Sprinkle-Chocolate", "Sprinkle-Rainbow");
                
                foreach($Sunsprinkles as $item){
                ?>
                <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
                <?php
                }

                ?>
                </select><!--END SELECT-->
                
                <select>
                <option selected="selected">Choose a Topping</option>
        
                <?php
                
                $Sunextras = array("--None--","Peanut Crumbs", "Almond Crumbs", "Oreo Crumbs", "Hot Fudge");
                
                foreach($Sunextras as $item){
                ?>
                <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
                <?php
                }

                ?>
                </select><!--END SELECT-->
                
                <p><input id="submit" type="submit"></p>
             
            
        </form>
        
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