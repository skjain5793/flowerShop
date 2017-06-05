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

$productQuery = mysqli_query($conn,"select * from banners where bid='$id'");

$products = mysqli_fetch_array($productQuery);

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-9">
                        <h1 class="page-header">
                            Dashboard <small>Edit Banners</small>
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
				
                                <!-- Edit Banners form -->
                                <div class="row">
                                    <form method="post" id="addProductForm" enctype="multipart/form-data">
                                       <div class="col-md-12">
                                              <center>Banner Images<input type="file" name="bannerImages[]" class="form-control" style="width:50%" multiple></center><br><br>
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
  
  

$uploads_dir = 'banners/';

$imageArr = array();

foreach ($_FILES["bannerImages"]["error"] as $key => $error) {

if ($error == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["bannerImages"]["tmp_name"][$key];
    $name = $_FILES["bannerImages"]["name"][$key];
    move_uploaded_file($tmp_name, "$uploads_dir/$name");
    array_push($imageArr,$name);
}

}

	
	 $imageArr=serialize($imageArr);

  
  $updateQuery = mysqli_query($conn,"update banners set banner_images = '$imageArr' where bid = '$id'");
  if($updateQuery)
  {
    echo ("<script LANGUAGE='javascript'>
    alert('Banners Edited Successfully!');
    window.location='view_banners.php';
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
