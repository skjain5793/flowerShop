<?php
include "../config.php";

$subcategory = $_POST['subcategory'];

$productName = $_POST['productName'];

$productActualPrice = $_POST['productActualPrice'];

$productPrice = $_POST['productPrice'];

$shortDescription = $_POST['shortDescription'];

$description = $_POST['description'];

$item1_title = $_POST['item1_title'];

$item1_quantity = $_POST['item1_quantity'];

$item2_title = $_POST['item2_title'];

$item2_quantity = $_POST['item2_quantity'];

$item3_title = $_POST['item3_title'];

$item3_quantity = $_POST['item3_quantity'];

$item4_title = $_POST['item4_title'];

$item4_quantity = $_POST['item4_quantity'];

$productImage=$_FILES['image']['name'];

$fetchsubcategoryId = mysqli_query($conn, "select * from subcategories where subcategory='$subcategory'");

$row = mysqli_fetch_array($fetchsubcategoryId);

$subcategoryId = $row['sid'];





$uploads_dir = 'image_gallery/';

$imageArr = array();

foreach ($_FILES["imageGallery"]["error"] as $key => $error) {

if ($error == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["imageGallery"]["tmp_name"][$key];
    $name = $_FILES["imageGallery"]["name"][$key];
    move_uploaded_file($tmp_name, "$uploads_dir/$name");
    array_push($imageArr,$name);
}

}




	 $imageArr=serialize($imageArr);



          $sql=mysqli_query($conn,"insert into products(sid,name,image,image_gallery,actual_price,price,short_description,description,item1_title,item1_quantity,item2_title,item2_quantity,item3_title,item3_quantity,item4_title,item4_quantity) values('$subcategoryId','$productName','$productImage','$imageArr','$productActualPrice','$productPrice','$shortDescription','$description','$item1_title','$item1_quantity','$item2_title','$item2_quantity','$item3_title','$item3_quantity','$item4_title','$item4_quantity')");

          if($sql)
          {
                move_uploaded_file($_FILES['image']['tmp_name'],"products/$productImage");
                echo ("<script LANGUAGE='javascript'>
            		alert('Product Added Successfully!');
            		window.location='view_products.php';
            		</script>");

          }

          else
          {
                echo ("<script LANGUAGE='javascript'>
                alert('Something went wrong. Try again!');
                window.location='add_products.php';
                </script>");
          }

?>
