<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<?php include("header.php"); ?>

<?php include("left_sidebar.php"); ?>

<?php

include("../config.php");

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-9">
                        <h1 class="page-header">
                            Dashboard <small>Add Banners</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Add Banners                            </li>
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
				
                                <!-- Add Banners form -->
                                <div class="row">
                                    <form action="" method="post" id="addProductForm" enctype="multipart/form-data">
                                       <div class="col-md-12">
                                              <center>Upload Banners<input type="file" name="bannerImages[]" class="form-control" style="width:50%" multiple></center><br><br>
                                        </div>										
                                        <div class="col-md-12">
                                              <center><input type="submit" value="Submit" name="submit" class="btn btn-success"></center><br><br>
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

if(isset($_POST['submit']))
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
	 
	 
          $sql=mysqli_query($conn,"insert into banners(banner_images) values('$imageArr')");

          if($sql)
          {
                echo ("<script LANGUAGE='javascript'>
            		alert('Banners Added!');
            		window.location='view_banners.php';
            		</script>");

          }

          else
          {
                echo ("<script LANGUAGE='javascript'>
                alert('Something went wrong. Try again!');
                window.location='add_banners.php';
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
