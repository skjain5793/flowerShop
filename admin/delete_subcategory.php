<?php
session_start();
if(isset($_SESSION['username']))
{

$id = @$_GET['id'];

?>

<?php include("../config.php"); ?>

<?php

$deleteQuery = mysqli_query($conn,"delete from subcategories where sid = '$id'");

if($deleteQuery)
{
  echo ("<script LANGUAGE='javascript'>
  alert('Subcategory Deleted Successfully!');
  window.location='view_subcategories.php';
  </script>");
}
else
{
  echo ("<script LANGUAGE='javascript'>
  alert('Something went wrong. Try again !');
  window.location='view_subcategories.php';
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
