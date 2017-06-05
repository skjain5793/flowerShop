<?php
session_start();
if(isset($_SESSION['username']))
{

$id = @$_GET['id'];

?>

<?php include("../config.php"); ?>

<?php

$deleteQuery = mysqli_query($conn,"delete from items where item_id = '$id'");

if($deleteQuery)
{
  echo ("<script LANGUAGE='javascript'>
  alert('Item was Deleted!');
  window.location='view_items.php';
  </script>");
}
else
{
  echo ("<script LANGUAGE='javascript'>
  alert('Something went wrong. Try again !');
  window.location='view_items.php';
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
