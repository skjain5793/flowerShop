<?php
session_start();
include("config.php");


if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_GET["quantity"])) {

$res=mysqli_query($conn,"select * from products where pid='".$_GET["pid"]."'");

while($row=mysqli_fetch_array($res))
{
		$productByCode[]=$row;
}

			$itemArray = array($productByCode[0]["pid"]=>array('name'=>$productByCode[0]["name"], 'pid'=>$productByCode[0]["pid"], 'quantity'=>$_GET["quantity"], 'price'=>$productByCode[0]["price"]));

			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["pid"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["pid"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_GET["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
			$_SESSION['button_id'] = $_GET['pid'];
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
				// echo "$k is $v";
					if($_GET["pid"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;
}
}

?>
