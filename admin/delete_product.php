<?php
session_start();
if(isset($_SESSION['username']))
{

$id = @$_GET['id'];

?>

<?php include("../config.php"); ?>

<?php

$deleteQuery = mysqli_query($conn,"delete from products where pid = '$id'");

if($deleteQuery)
{
  echo ("<script LANGUAGE='javascript'>
  alert('Product Deleted Successfully!');
  window.location='view_products.php';
  </script>");
}
else
{
  echo ("<script LANGUAGE='javascript'>
  alert('Something went wrong. Try again !');
  window.location='view_products.php';
  </script>");
}

?>

<?php
}
else
{
    header("location:index.php");
}
?>
