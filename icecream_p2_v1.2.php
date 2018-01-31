<?php
//icecream.php

//bowl
$myItem = new Item(1, "Bowl","Our bowl comes with 1 ice cream scoop - extra scoops and topins to be added", 4.99);
$myItem->addExtra("Scoop");
$myItem->addExtra("Caramel Sauce");
$items[] = $myItem;

//sugar cone
$myItem = new Item(2, "Sugar Cone","Our sugar cone come with 1 ice cream scoop - extra scoops and topins to be added", 5.99);
$myItem->addExtra("Scoop");
$myItem->addExtra("Caramel Sauce");
$items[] = $myItem;

//ice cream sandwich
$myItem = new Item(3, "Ice Cream Sandwich", "On our ice cream sandwich you get the chance to choose your own cookie-from our cookie selection -  and ice cream. Some topings are avaliable as well.", 6.99);
$myItem->addExtra("Almond Crumbs");
$myItem->addExtra("Oreo Crumbs");
$items[] = $myItem;

//sundae 
$myItem = new Item(4, "Sundae", "Our sunday is perfection. 2 ice cream scoops, chocolate or caramel sauce, chocolate or rainbow sprinkles, whiphed cream, and a cherry on top. - Extras topping are avaliable.", 8.99);
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
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ice Cream Menu</title>
<!-- <link rel="stylesheet" href="main.css"/> -->
<style>    
body {
    font-family: Arial, Helvetica, sans-serif;
    background: #666666;
}
main {
    width: 80%;
    margin: 0 auto;
    padding: none;
    text-align: inline-block;
    background: #FFFFFF;
    border: 2px solid #000000;
}
div1 {
    width: auto;
    height: 800px;
    padding: 0;
    margin: 0 auto;
}
p {
    margin: .5em 0;
}

br {
    clear: both;
    margin-bottom: .2em;
}
    
footer {
line-height:25px; 
background:#000000;
width:100%;
color:white;
    display: table;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}

footer li {
float:left;
list-style-type:none; 
width:33.33%;
text-align:center;
padding-bottom:.5em;
}
 
    </style>
    
</head>
    
    <body>              
        <main>
            <h1>Product List</h1>
            
    <div1 class="bowl">  
        <h2>Ice Cream Menu</h2>
        
    
 <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
             
       <?php 
        
        foreach ($items as $item) {
               echo '<p>'.$item->ID.'</p>';
}
        ?>
        </form>
        
            </div1>
            
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