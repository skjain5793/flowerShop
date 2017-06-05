<?php
session_start();
if(isset($_SESSION['username']))
{

$id = @$_GET['id'];

?>

<?php include("../config.php"); ?>

<?php

$deleteQuery = mysqli_query($conn,"delete from categories where cid = '$id'");

if($deleteQuery)
{
  echo ("<script LANGUAGE='javascript'>
  alert('Category Deleted Successfully!');
  window.location='view_categories.php';
  </script>");
}
else
{
  echo ("<script LANGUAGE='javascript'>
  alert('Somethign went wrong.Try again !');
  indow.location='view_categories.php';
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
