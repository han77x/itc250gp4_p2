<html>
<?php
//Here is where we are going to build the form and include the items to it. People are going to order here, and we will add the value and display to them. Add on items have a addition cost of $x. We need to add the value of what they chosse and any extras than display.

include 'items.php';


?>
<form method="post"	action="<?php echo $_SERVER["PHP_SELF"]; ?>"> 

<?php
	
	foreach($items as $item){
		echo 
			'
			<h3>' .$item->Name.' </h3>
			<p>'.$item->Description.' and '.$item->Price.'. </p>
			<select name="'.$item->ID.'" size="">
        	<option value="0"> Select the quantity </option>
        	<option value="1">1</option>
        	<option value="2">2</option>
        	<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			</select>
			
			';	
	
	}
		
?>		
	
	
	
</html>	

