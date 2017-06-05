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
                            Dashboard <small>Add Items</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Add Items                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-3">
                      <h1 class="page-header">
                          <a href="view_items.php"><button class="btn btn-success">View Items</button></a>
                      </h1>
                    </div>
                </div>
                <!-- /.row -->

				<br>

                                <!-- Add Items form -->
                                <div class="row">
                                    <form action="" method="post" id="addProductForm" enctype="multipart/form-data">
                                       <div class="col-md-12">
                                              <center>Upload Image<input type="file" name="item_image" class="form-control" style="width:50%"></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                               <center>Title<input type="text" name="item_title" class="form-control" style="width:50%" placeholder="Enter Item title"></center><br><br>
                                         </div>
                                         <div class="col-md-12">
                                                <center>Price<input type="text" name="item_price" class="form-control" style="width:50%" placeholder="Enter Price"></center><br><br>
                                          </div>
                                          <div class="col-md-12">
                                                 <center>Stock<input type="text" name="item_stock" class="form-control" style="width:50%" placeholder="Enter  Stock"></center><br><br>
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

$item_image = $_FILES['item_image']['name'];
$item_title = $_POST['item_title'];
$item_price = $_POST['item_price'];
$item_stock = $_POST['item_stock'];

move_uploaded_file($_FILES['item_image']['tmp_name'],"items/$item_image");


          $sql=mysqli_query($conn,"insert into items(item_image,item_title,item_price,item_stock) values('$item_image','$item_title','$item_price','$item_stock')");

          if($sql)
          {
                echo ("<script LANGUAGE='javascript'>
            		alert('Item was Added!');
            		window.location='view_items.php';
            		</script>");

          }

          else
          {
                echo ("<script LANGUAGE='javascript'>
                alert('Something went wrong. Try again!');
                window.location='add_items.php';
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
