<?php
session_start();
if(isset($_SESSION['username']))
{

$id = @$_GET['id'];

?>

<?php include("../config.php"); ?>

<?php include("header.php"); ?>

<?php include("left_sidebar.php"); ?>

<?php

$fetchProductQuery = mysqli_query($conn,"select * from subcategories where sid = '$id'");

$fetchProduct = mysqli_fetch_array($fetchProductQuery);

$subcategory = $fetchProduct['subcategory'];

$meta_tag = $fetchProduct['meta_tag'];

$meta_description = $fetchProduct['meta_description'];

?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-9">
                <h1 class="page-header">
                    Dashboard <small>Edit Subcategory</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i>Edit Subcategory
                    </li>
                </ol>
            </div>
            <div class="col-lg-3">
              <h1 class="page-header">
                    <a href="view_subcategories.php"><button class="btn btn-success">View Subategories</button></a>
             </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Edit Sub category form -->
        <div class="row">
            <form method="post" id="">
                <div class="col-md-12">
                      <center><input type="text" name="subcategory" class="form-control" placeholder="Enter Subcategory" value="<?php echo $subcategory; ?>" style="width:50%"></center><br><br>
                </div>
                 <div class="col-md-12">
                      <center><input type="text" name="meta_tag" class="form-control" placeholder="Meta tag" value="<?php echo $meta_tag; ?>" style="width:50%"></center><br><br>
                </div>
                <div class="col-md-12">
                      <center><input type="text" name="meta_description" class="form-control" placeholder="Meta description" value="<?php echo $meta_description; ?>" style="width:50%"></center><br><br>
                </div>
               <div class="col-md-12">
                      <center><div id="error"></div></center><br><br>
                </div>
                <div class="col-md-12">
                      <center><input type="submit" name="update" value="Submit" class="btn btn-success"></center><br><br>
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

<?php include("footer.php"); ?>

<?php
if(isset($_POST['update']))
{
    $newSubcategory = $_POST['subcategory'];
	$newMetaTag = $_POST['meta_tag'];
	$newMetaDescription = $_POST['meta_description'];
    $updateQuery = mysqli_query($conn,"update subcategories set subcategory = '$newSubcategory', meta_tag='$newMetaTag', meta_description = '$newMetaDescription' where sid='$id'");
    if($updateQuery)
    {
      echo ("<script LANGUAGE='javascript'>
      alert('Subcategory Edited Successfully!');
      window.location='view_subcategories.php';
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

<?php
}
else
{
    header("location:index.php");
}
?>
