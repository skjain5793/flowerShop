<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<?php include("header.php"); ?>

<?php include("left_sidebar.php"); ?>

<?php

include("../config.php");
$id = $_GET['id'];

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-9">
                        <h1 class="page-header">
                            Dashboard <small>Edit Slides</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Edit Slides                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-3">
                      <h1 class="page-header">
                          <a href="view_slides.php"><button class="btn btn-success">View Slider</button></a>
                      </h1>
                    </div>
                </div>
                <!-- /.row -->

				<br>

                                <!-- Edit Slides form -->
                                <div class="row">
                                    <form action="" method="post" id="addProductForm" enctype="multipart/form-data">
                                       <div class="col-md-12">
                                              <center>Upload New slides<input type="file" name="slideImages[]" class="form-control" style="width:50%" multiple></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                              <center><input type="submit" value="Submit" name="update" class="btn btn-success"></center><br><br>
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

$uploads_dir = 'slides/';

$imageArr = array();

foreach ($_FILES["slideImages"]["error"] as $key => $error) {

if ($error == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["slideImages"]["tmp_name"][$key];
    $name = $_FILES["slideImages"]["name"][$key];
    move_uploaded_file($tmp_name, "$uploads_dir/$name");
    array_push($imageArr,$name);
}

}


	 $imageArr=serialize($imageArr);


          $sql=mysqli_query($conn,"update slides set slide_images = '$imageArr' where slide_id='$id'");

          if($sql)
          {
                echo ("<script LANGUAGE='javascript'>
            		alert('Slides Edited!');
            		window.location='view_slides.php';
            		</script>");

          }

          else
          {
                echo ("<script LANGUAGE='javascript'>
                alert('Something went wrong. Try again!');
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
