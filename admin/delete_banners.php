<?php
session_start();
if(isset($_SESSION['username']))
{

$id = @$_GET['id'];

?>

<?php include("../config.php"); ?>

<?php

$deleteQuery = mysqli_query($conn,"delete from banners where bid = '$id'");

if($deleteQuery)
{
  echo ("<script LANGUAGE='javascript'>
  alert('Banners Deleted!');
  window.location='view_banners.php';
  </script>");
}
else
{
  echo ("<script LANGUAGE='javascript'>
  alert('Something went wrong. Try again !');
  window.location='view_banners.php';
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
