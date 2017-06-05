<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<?php include("header.php"); ?>

<?php include("left_sidebar.php"); ?>

<?php

include("../config.php");

$categoryQuery = mysqli_query($conn,"select * from categories");

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-9">
                        <h1 class="page-header">
                            Dashboard <small>Add Sub-category</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Add Sub-category
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-3">
                      <h1 class="page-header">
                            <a href="view_subcategories.php"><button class="btn btn-success">View Subcategories</button></a>
                    </h1>
                    </div>

                </div>
                <!-- /.row -->



                <!-- Add Sub-category form -->
                <div class="row">
                    <form method="post" id="addSubcategoryForm">
                        <div class="col-md-12">
                           <center>
                                <select id="category" name="category" class="form-control" style="width:50%">
                                          <option>Select Category</option>
                                          <?php while($rows=mysqli_fetch_array($categoryQuery))
                                                {
                                                  $category = $rows['category'];
                                            ?>
                                          <option><?php echo $category;?></option>
                                          <?php }  ?>
                                </select>
                            </center>
                        </div>  <br><br>  <br><br>
                        <div class="col-md-12">
                              <center><input type="text" name="subcategoryName" class="form-control" placeholder="Enter Sub-category" style="width:50%"></center><br><br>
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


    $("#addSubcategoryForm").submit(function(e){

                  var category  = $('#addSubcategoryForm').find('select[name="category"]').val();
                  var subcategoryId = $('#addSubcategoryForm').find('input[name="subcategoryId"]').val();
                  var subcategoryName = $('#addSubcategoryForm').find('input[name="subcategoryName"]').val();
                  var meta_tag = $('#addSubcategoryForm').find('input[name="meta_tag"]').val();
                  var meta_description = $('#addSubcategoryForm').find('input[name="meta_description"]').val();

                  var dataString = "category="+category+"&subcategoryName="+subcategoryName+"&meta_tag="+meta_tag+"&meta_description="+meta_description;

                  if(category=='Select Category')
                  	{
                              $("#error").html("Please choose category").slideDown("slow");
                              $("#error").html("Please choose category").slideUp("slow");
                          		return false;
                  	}
                  else if(subcategoryName=='')
                  {
                              $("#error").html("Enter Sub-category").slideDown("slow");
                              $("#error").html("Enter Sub-category").slideUp("slow");
                              return false;
                  }
                  else
                  {
                              $.ajax({
                              type: "POST",
                              url: "insert_subcategory.php",
                              data: dataString,
                              success: function(response){
                                    alert(response);
                                    window.location = "view_subcategories.php";
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
