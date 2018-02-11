<html>
<style>
	body {
    font-family: "Arial", sans-serif;
    font-size: 1em;
    text-align: left;
    color: #000;
    background-color: #fff;
    margin: 20px auto;
    margin-left: 50px;
}

h1 {
    font-weight: lighter;
    margin: 20px 0 30px 0;
	text-align: center;
}

form {
    display: inline-block;
    text-align: left;
}

input[type=checkbox] {
    margin: 10px 5px 10px 20px;
    cursor: pointer;
    display: inline-block;
}

input[type=submit] {
    font-size: 1.2em;
    color: #fff;
    background-color: #4682B4;
    padding: 10px 16px;
    margin: 20px auto;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: block;
}

input[type=submit]:hover {
    background-color: #B0C4DE;
    transition: 0.3s;
}

a:link {
    text-decoration: none;
    color: #00008B;
}

a:visited {
    color: #4682B4;
}

a:hover {
    color: #B0C4DE;
    transition: 0.3s;
}

a:active {
    color: #ADD8E6;
}

footer {
    color: #999;
    text-align: center;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    margin-bottom: 20px;
}
</style>	
<?php
//Here is where we are going to build the form and include the items to it. People are going to order here, and we will add the value and display to them. Add on items have a addition cost of $x. We need to add the value of what they chosse and any extras than display.

include 'items.php';


?>
	
	<h1>YumYum Ice Cream Truck</h1>
<form method="post"	name="calProducts" action="<?php echo $_SERVER["PHP_SELF"]; ?>"> 

<?php
	
$totalPrice = 0;
$itemArray[] = '';

//$order = explode('|', $_POST['quantity[]']);
	
	foreach($items as $item){
		echo 
			'
			<h3>' .$item->Name.': </h3> <p> '.$item->Description.' and '.$item->Price.'. </p>
			<input type="text" name="quantity" id="quantity" placeholder=" Quantity of '.$item->Name.' ">
    <br />
			<select name="'.$item->Name.'">
        	<option value="0"> Select the quantity </option>
        	<option value="1|'.$item->Price.'">1</option>
        	<option value="2|'.$item->Price.'">2</option>
        	<option value="3|'.$item->Price.'">3</option>
			<option value="4|'.$item->Price.'">4</option>
			<option value="5|'.$item->Price.'">5</option>
			<option value="6|'.$item->Price.'">6</option>
			</select>
			<br />
			<br />
			<select name="extras" id="addExtras" >
        	<option value="extras1"> Your toppings options </option>
        	<option value="1"></option>
        	<option value="2"></option>
        	<option value="3"></option>
			<option value="4"></option>
			<option value="5"></option>
			<option value="6"></option>
			</select>
			
			
				
			';
		
		
		//select item quantity to $quantity
	}
	?>
	
			<br />
			<br />
			<input type="submit" name="calculateTotal" value="CALCULATE" id="calculateTotal">
			<br />
			<br />
			

	</form>
	
<?php
/*function totalPrice($quantity, $price){
		if($quantity == 1){
			return ($price * 1);
		}elseif($quantity == 2){
			return ($price * 2);
		}elseif($quantity == 3){
			return ($price * 3);
		}elseif($quantity == 4){
			return ($price * 4);
		}
		elseif($quantity == 5){
			return ($price * 5);
		}
	}
	*/	
	/*
		if totalPrice > 0
			display foreach item in itemArray
	*/
	
if (isset($_POST['calculateTotal'])){
		
	$quantity = $_POST['quantity'];

	echo $quantity. ', ' .$item->Price;
	//$total = 0;
		//this are strings objects
		
		//print_r($quantity);
		//$price = $_POST['$item->Price'];
		//foreach($quantity as $key => $quan){
			//$order = explode('|', $quan);
			//$total += (int)$quan[0] * (int)$quan[1];
			//echo $total;
			//echo gettype($quan);
			 //echo '<pre>';
    		//print_r($quan);
    		//echo '</pre>';
    		//die;

		}?>
		

	
</html>	

