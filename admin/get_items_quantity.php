<?php
include'../config.php';

 $item_title = $_POST['item_title'];
 
 $fetchStockQuery = mysqli_query($conn,"select * from items where item_title = '$item_title'");
 
 $fetchStock = mysqli_fetch_array($fetchStockQuery);
 
 $stock = $fetchStock['item_stock'];

 
 for($i=1;$i<=$stock;$i++)
 {
?> <option><?php echo $i; ?></option>

<?php }

	  
?>
