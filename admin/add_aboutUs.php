<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<?php include("header.php"); ?>

<?php include("left_sidebar.php"); ?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-9">
                        <h1 class="page-header">
                            Dashboard <small>Add About Us</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Add About Us
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

                <!-- Add About Us Text form -->
                <div class="row">
                    <form method="post" id="">
                        <div class="col-md-12">
                              <center><textarea name="about_us" class="form-control" placeholder="Enter about us text" style="width:50%" rows="10"></textarea></center><br><br>
                        </div>
                         <div class="col-md-12">
                              <center><div id="error"></div></center><br><br>
                        </div>
                        <div class="col-md-12">
                              <center><input type="submit" name="submit" value="Submit" class="btn btn-success"></center><br><br>
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

include "../config.php";

if(isset($_POST['submit']))
{
	$about_us = $_POST['about_us'];
	
	$insertAboutUs = mysqli_query($conn,"insert into about_us(aboutUs) value('$about_us')");
	
	    if($insertAboutUs)
    {
      echo ("<script LANGUAGE='javascript'>
      alert('About Us Added Successfully!');
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
	
<?php include("footer.php"); ?>
<?php
}
else
{
    header("location:index.php");
}
?>
