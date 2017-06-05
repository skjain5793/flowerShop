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

$fetchAboutUsQuery = mysqli_query($conn,"select * from about_us where id = '$id'");

$fetchAboutUs = mysqli_fetch_array($fetchAboutUsQuery);

$aboutUs = $fetchAboutUs['aboutUs'];

?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-9">
                <h1 class="page-header">
                    Dashboard <small>Edit About Us</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Edit About Us
                    </li>
                </ol>
            </div>
            <div class="col-lg-3">
              <h1 class="page-header">
                    <a href="view_aboutUs.php"><button class="btn btn-success">View About Us</button></a>
             </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Edit About Us text form -->
        <div class="row">
            <form method="post" id="">
                <div class="col-md-12">
                      <center><textarea name="aboutUs" class="form-control" placeholder="Enter about us text" value="<?php echo $aboutUs; ?>" style="width:50%" rows="10"></textarea></center><br><br>
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
    $newAboutUs = $_POST['aboutUs'];
		
    $updateQuery = mysqli_query($conn,"update about_us set aboutUs = '$newAboutUs' where id='$id'");
    if($updateQuery)
    {
      echo ("<script LANGUAGE='javascript'>
      alert('About Us text was Edited Successfully!');
      window.location='view_aboutUs.php';
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
