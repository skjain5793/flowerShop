<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<?php include("header.php"); ?>

<?php include("left_sidebar.php"); ?>

<?php

$id = $_GET['id'];

include("../config.php");

$productQuery = mysqli_query($conn,"select * from products where pid='$id'");

$products = mysqli_fetch_array($productQuery);

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-9">
                        <h1 class="page-header">
                            Dashboard <small>Edit Product</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>Edit Product
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-3">
                      <h1 class="page-header">
                          <a href="view_products.php"><button class="btn btn-success">View Products</button></a>
                      </h1>
                    </div>
                </div>
                <!-- /.row -->

                                <!-- Add Sub-category form -->
                                <div class="row">
                                    <form method="post" id="addProductForm" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                              <center>Product Title<input type="text" name="name" class="form-control" value="<?php echo $products['name']; ?>" placeholder="Enter product names" style="width:50%"></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                              <center>Product Image<input type="file" name="image" class="form-control" style="width:50%"></center><br><br>
                                        </div>
                                       <div class="col-md-12">
                                              <center>Product Gallery Images<input type="file" name="imageGallery[]" class="form-control" style="width:50%" multiple></center><br><br>
                                        </div>																				
                                        <div class="col-md-12">
                                              <center>Actual Price<input type="text" name="actualPrice" class="form-control"  value="<?php echo $products['actual_price']; ?>"  placeholder="Enter Actual price" style="width:50%"></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                              <center>Sale Price<input type="text" name="price" class="form-control"  value="<?php echo $products['price']; ?>"  placeholder="Enter Sale price" style="width:50%"></center><br><br>
                                        </div>
<!--                                        <div class="col-md-12">
                                              <center>Item 1<input type="text" name="item1_title" class="form-control"  value="<?php echo $products['item1_title']; ?>"  placeholder="Item 1 title" style="width:50%"></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                              <center>Item 1 Quantity<input type="text" name="item1_quantity" class="form-control"  value="<?php echo $products['item1_quantity']; ?>"  placeholder="Item 1 quantity" style="width:50%"></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                              <center>Item 2<input type="text" name="item2_title" class="form-control"  value="<?php echo $products['item2_title']; ?>"  placeholder="Item 2 title" style="width:50%"></center><br><br>
                                        </div>										
                                        <div class="col-md-12">
                                              <center>Item 2 Quantity<input type="text" name="item2_quantity" class="form-control"  value="<?php echo $products['item2_quantity']; ?>"  placeholder="Item 2 quantity" style="width:50%"></center><br><br>
                                        </div>										
                                        <div class="col-md-12">
                                              <center>Item 3<input type="text" name="item3_title" class="form-control"  value="<?php echo $products['item3_title']; ?>"  placeholder="Item 3 title" style="width:50%"></center><br><br>
                                        </div>										
                                        <div class="col-md-12">
                                              <center>Item 3 Quantity<input type="text" name="item3_quantity" class="form-control"  value="<?php echo $products['item3_quantity']; ?>"  placeholder="Item 3 quantity" style="width:50%"></center><br><br>
                                        </div>										
                                        <div class="col-md-12">
                                              <center>Item 4<input type="text" name="item4_title" class="form-control"  value="<?php echo $products['item4_title']; ?>"  placeholder="Item 4 title" style="width:50%"></center><br><br>
                                        </div>										
                                        <div class="col-md-12">
                                              <center>Item 4 Quantity<input type="text" name="item4_quantity" class="form-control"  value="<?php echo $products['item4_quantity']; ?>"  placeholder="Item 4 quantity" style="width:50%"></center><br><br>
                                        </div>				-->						
                                        <div class="col-md-12">
                                              <center>Short Description<input type="text" name="shortDescription" class="form-control"  value="<?php echo $products['short_description']; ?>"  placeholder="Enter product Description" style="width:50%"></center><br><br>
                                        </div>										
                                        <div class="col-md-12">
                                              <center>Full Description<input type="text" name="description" class="form-control"  value="<?php echo $products['description']; ?>"  placeholder="Enter product Description" style="width:50%"></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                              <center><div id="error"></div></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                              <center><input type="submit" value="Submit" name="update" class="btn btn-success"></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                              <center><div id="success"></div></center>
                                        </div>

                                    </form>
                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.container-fluid -->

                        </div>
                        <!-- /#page-wrapper -->

                    </div>
                    <!-- /#wrapper -->

<?php
if(isset($_POST['update']))
{
  $name = $_POST['name'];
  $image = $_FILES['image']['name'];
  $actualPrice = $_POST['actualPrice'];
  $price = $_POST['price'];
  $shortDescription = $_POST['shortDescription'];
  $description = $_POST['description'];
  
  
  
  

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

  
  
  
  $updateQuery = mysqli_query($conn,"update products set name = '$name',image = '$image',image_gallery = '$imageArr',actual_price = '$actualPrice',price = '$price',short_description='$shortDescription',description='$description' where pid = '$id'");
  if($updateQuery)
  {
    move_uploaded_file($_FILES['image']['tmp_name'],"products/$image");

    echo ("<script LANGUAGE='javascript'>
    alert('Product Edited Successfully!');
    window.location='view_products.php';
    </script>");
  }
  else
  {
    echo ("<script LANGUAGE='javascript'>
   alert('Something went wrong. Try again !');
   </script>");
  }
}
?>

<?php include("footer.php"); ?>
<?php
}
else
{
   header("location:index.php");
}
?>
