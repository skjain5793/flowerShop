<?php
include("config.php");
echo $id = $_GET["id"];

$query = mysqli_query($conn,"select * from products where pid = '$id'");

$run = mysqli_fetch_array($query);

echo $run['name'];


?>