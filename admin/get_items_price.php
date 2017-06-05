<?php
include'../config.php';

 $item1_title = $_POST['item1_title'];

 $item1_quantity = $_POST['item1_quantity'];

 $item2_title = $_POST['item2_title'];

 $item2_quantity = $_POST['item2_quantity'];

 $item3_title = $_POST['item3_title'];

 $item3_quantity = $_POST['item3_quantity'];

 $item4_title = $_POST['item4_title'];

 $item4_quantity = $_POST['item4_quantity'];
 
 $fetchItem1PriceQuery = mysqli_query($conn,"select * from items where item_title = '$item1_title'");

 $fetchItem1Price = mysqli_fetch_array($fetchItem1PriceQuery);

       $item1Price =  $fetchItem1Price['item_price']; 

 $fetchItem2PriceQuery = mysqli_query($conn,"select * from items where item_title = '$item2_title'");

 $fetchItem2Price = mysqli_fetch_array($fetchItem2PriceQuery);

       $item2Price =  $fetchItem2Price['item_price']; 

  $fetchItem3PriceQuery = mysqli_query($conn,"select * from items where item_title = '$item3_title'");

 $fetchItem3Price = mysqli_fetch_array($fetchItem3PriceQuery);

       $item3Price =  $fetchItem3Price['item_price']; 

  $fetchItem4PriceQuery = mysqli_query($conn,"select * from items where item_title = '$item4_title'");

 $fetchItem4Price = mysqli_fetch_array($fetchItem4PriceQuery);

      $item4Price =  $fetchItem4Price['item_price']; 


	  
	  echo $price = ($item1Price*$item1_quantity) + ($item2Price*$item2_quantity) + ($item3Price*$item3_quantity) + ($item4Price*$item4_quantity);
	  
	  
?>
