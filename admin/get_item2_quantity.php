<?php
include'../config.php';

 $item_title = $_POST['item_title'];
 
 $fetchStockQuery = mysqli_query($conn,"select * from items where item_title = '$item_title'");
 
 $fetchStock = mysqli_fetch_array($fetchStockQuery);
 
 $stock = $fetchStock['item_stock'];
 
 
 
 
 /*$check = mysqli_query($conn,"SELECT *, 
			CASE WHEN item1_title = '$item_title' THEN item1_quantity 
			WHEN item2_title = '$item_title' THEN item2_quantity 
			WHEN item3_title = '$item_title' THEN item3_quantity 
			WHEN item4_title = '$item_title' THEN item4_quantity 			
			ELSE item4_quantity END AS Continent FROM products");
*/
$check = mysqli_query($conn,"select * from products where item1_title = '$item_title'");
 while($fetch = mysqli_fetch_array($check))
{
	echo $fetch['item1_quantity'];
}	
 

	  
?>
