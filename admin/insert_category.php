<?php

include("../config.php");


$categoryName = $_POST['categoryName'];

$meta_tag = $_POST['meta_tag'];

$meta_description = $_POST['meta_description'];

        $query = mysqli_query($conn,"insert into categories(category,meta_tag,meta_description) values('$categoryName','$meta_tag','$meta_description')");

        if($query)
        {
           echo "Category was added successfully";
        }
        else
        {
            echo "Sorry something went wrong. Please try again later";
        }

?>
