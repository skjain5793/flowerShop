<?php
session_start();
if(isset($_SESSION['username']))
{

$id = @$_GET['id'];

?>

<?php include("../config.php"); ?>

<?php

$deleteQuery = mysqli_query($conn,"delete from about_us where id = '$id'");

if($deleteQuery)
{
  echo ("<script LANGUAGE='javascript'>
  alert('About Us was Deleted Successfully!');
  window.location='view_aboutUs.php';
  </script>");
}
else
{
  echo ("<script LANGUAGE='javascript'>
  alert('Somethign went wrong.Try again !');
  indow.location='view_aboutUs.php';
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
