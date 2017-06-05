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
                            Dashboard <small>Add Category</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Add Category
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-3">
                      <h1 class="page-header">
                            <a href="view_categories.php"><button class="btn btn-success">View Categories</button></a>
                     </h1>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Add Category form -->
                <div class="row">
                    <form method="post" id="addCategoryForm">
                        <div class="col-md-12">
                              <center><input type="text" name="categoryName" class="form-control" placeholder="Enter category" style="width:50%"></center><br><br>
                        </div>
                          <div class="col-md-12">
                              <center><input type="text" name="meta_tag" class="form-control" placeholder="Enter meta tag" style="width:50%"></center><br><br>
                        </div>
                      <div class="col-md-12">
                              <center><input type="text" name="meta_description" class="form-control" placeholder="Enter meta description" style="width:50%"></center><br><br>
                        </div>
                        <div class="col-md-12">
                              <center><div id="error"></div></center><br><br>
                        </div>
                        <div class="col-md-12">
                              <center><input type="submit" value="Submit" class="btn btn-success"></center><br><br>
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

<script>

$("#addCategoryForm").submit(function(e){

              var categoryName = $('#addCategoryForm').find('input[name="categoryName"]').val();
			  
			  var meta_tag = $('#addCategoryForm').find('input[name="meta_tag"]').val();

              var meta_description = $('#addCategoryForm').find('input[name="meta_description"]').val();

              var dataString = "categoryName="+categoryName+"&meta_tag="+meta_tag+"&meta_description="+meta_description;

              if(categoryName=='')
              {
                          $("#error").html("Enter Category").slideDown("slow");
                          $("#error").html("Enter Category").slideUp("slow");
                          return false;
              }
              else
              {
                          $.ajax({
                          type: "POST",
                          url: "insert_category.php",
                          data: dataString,
                          success: function(response){
                                alert(response);
                                window.location = "view_categories.php";
                          }
                          });

                          return false;

              }

    });


</script>

<?php include("footer.php"); ?>
<?php
}
else
{
    header("location:index.php");
}
?>
