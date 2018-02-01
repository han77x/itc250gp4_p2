<html>
<?php
//Here is where we are going to build the form and include the items to it. People are going to order here, and we will add the value and display to them. Add on items have a addition cost of $x. We need to add the value of what they chosse and any extras than display.

include 'items.php';


?>
<form method="post"	name="calProducts" action="<?php echo $_SERVER["PHP_SELF"]; ?>"> 

<?php
	
$totalPrice = 0;
$itemArray[] = '';
$order = explode('|', $_POST['quantity']);
	
	foreach($items as $item){
		echo 
			'
			<h3>' .$item->Name.': </h3> <p> '.$item->Description.' and '.$item->Price.'. </p>
			<select name="quantity" id="quantity" >
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
	
		/*echo' 
		
			<br />
			<br />
			<input type="submit" name="calculateTotal" value="CALCULATE" id="calculateTotal">
			<br />
			<br />
		';*/
?>
		
			<br />
			<br />
			<input type="submit" name="calculateTotal" value="CALCULATE" id="calculateTotal">
			<br />
			<br />
	</form>
	
<?php
function totalPrice($quantity, $price){
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
		
	/*
		if totalPrice > 0
			display foreach item in itemArray
	*/
	
if (isset($_POST['calculateTotal'])){
		//$total = 0;
		//call the function
		//this are strings objects
		$total += (int)$order[0] * (int)$order[1];
		//$price = $_POST['$item->Price'];
		
		echo $item->Name. ',' .$total;
	
		echo gettype($order[0]);
		echo gettype($order[1]);
		//echo $item->ID. ', ' .$item->Name;
		
	}?>


