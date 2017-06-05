<?php

include("../config.php");

$category = $_POST['category'];

$meta_tag = $_POST['meta_tag'];

$meta_description = $_POST['meta_description'];

$subcategoryName = $_POST['subcategoryName'];

$fetchcategoryId = mysqli_query($conn,"select cid from categories where category='$category'");

$getcategoryId = mysqli_fetch_array($fetchcategoryId);

$categoryId = $getcategoryId['cid'];


        $query = mysqli_query($conn,"insert into subcategories(cid,subcategory,meta_tag,meta_description) values('$categoryId','$subcategoryName','$meta_tag','$meta_description')");

        if($query)
        {
            echo "Subcategory was added";
        }
        else
        {
            echo "Sorry something went wrong. Please try again";
        }

?>
