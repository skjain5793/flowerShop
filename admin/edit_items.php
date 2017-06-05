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

$itemQuery = mysqli_query($conn,"select * from items where item_id='$id'");

$items = mysqli_fetch_array($itemQuery);

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-9">
                        <h1 class="page-header">
                            Dashboard <small>Edit Items</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>Edit Banners
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-3">
                      <h1 class="page-header">
                          <a href="view_banners.php"><button class="btn btn-success">View Banners</button></a>
                      </h1>
                    </div>
                </div>
                <!-- /.row -->

				<br>

                                <!-- Edit Items form -->
                                <div class="row">
                                    <form method="post" id="addProductForm" enctype="multipart/form-data">
                                       <div class="col-md-12">
                                              <center>Image<input type="file" name="item_image" class="form-control" style="width:50%"></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                               <center>Title<input type="text" name="item_title" class="form-control" style="width:50%" value="<?php echo $items['item_title']; ?>" placeholder="Title"></center><br><br>
                                         </div>
                                         <div class="col-md-12">
                                                <center>Price<input type="text" name="item_price" class="form-control" style="width:50%" value="<?php echo $items['item_price']; ?>" placeholder="Price"></center><br><br>
                                          </div>
                                          <div class="col-md-12">
                                                 <center>Stock<input type="text" name="item_stock" class="form-control" style="width:50%" value="<?php echo $items['item_stock']; ?>" placeholder="Stock"></center><br><br>
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

$item_image = $_FILES['item_image']['name'];
$item_title = $_POST['item_title'];
$item_price = $_POST['item_price'];
$item_stock = $_POST['item_stock'];

move_uploaded_file($_FILES['item_image']['tmp_name'],"items/$item_image");


  $updateQuery = mysqli_query($conn,"update items set item_image = '$item_image',item_title = '$item_title', item_price = '$item_price',item_stock='$item_stock' where item_id = '$id'");
  if($updateQuery)
  {
    echo ("<script LANGUAGE='javascript'>
    alert('Item was Edited Successfully!');
    window.location='view_items.php';
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
