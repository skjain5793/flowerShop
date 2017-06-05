<?php

include "../config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$checklogin = mysqli_query($conn,"select * from admin where username = '$username'");

$fetchadmin = mysqli_fetch_array($checklogin);

$adminName = $fetchadmin['username'];
$adminPassword = $fetchadmin['password'];

if($username == $adminName && $password == $adminPassword)
{
        session_start();
        $_SESSION['username'] = $adminName;
        header("location:add_category.php");
}
else
{
        echo ("<script LANGUAGE='javascript'>
        alert('Wrong Username or Password');
        window.location='index.php';
        </script>");
}

?>
