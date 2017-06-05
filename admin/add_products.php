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
                            Dashboard <small>Add Products</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Add Products
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-3">
                      <h1 class="page-header">
                          <a href="view_products.php"><button class="btn btn-success">View Products</button></a>
                      </h1>
                    </div>
                </div>
                <!-- /.row -->

                                <!-- Add Products form -->
                                <div class="row">
                                    <form action="insert_product.php" method="post" id="addProductForm" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                           <center>
                   										   Choose product category
                                                <select id="category" name="category" class="form-control" style="width:50%" onchange="getSubcategory();">
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
                                           <center>
										               Product subcategory
                                                <select id="subcategory" name="subcategory" class="form-control" style="width:50%">
                                                          <option>Select Subategory</option>
                                                </select>
                                            </center>
                                        </div>  <br><br>  <br><br>
                                        <div class="col-md-12">
                                              <center>Product Title<input type="text" name="productName" class="form-control" placeholder="Enter product names" style="width:50%"></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                              <center>Upload Product Image<input type="file" name="image" class="form-control" style="width:50%"></center><br><br>
                                        </div>
                                       <div class="col-md-12">
                                              <center>Upload Product Gallery Images<input type="file" name="imageGallery[]" class="form-control" style="width:50%" multiple></center><br><br>
                                        </div>


                                        <div class="col-md-12">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                              <center>Item 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                <select name="item1_title" id="item1_title" onchange="get_item1_qunatity(); itemsTotalPrice();">
												  <option value="">Choose Item</option>
                                                  <?php  $item1titleQuery = mysqli_query($conn,"select * from items");

                                                 while($item1title = mysqli_fetch_array($item1titleQuery))
                                                  {
                                                 ?>
                                                  <option><?php echo $item1title['item_title']; ?></option>

                                                <?php } ?>

                                                </select>

                                              </center><br><br>
                                        </div>
                                        <div class="col-md-3">
                                              <center>Quantity
                                                <select name = "item1_quantity" id="item1_quantity"  onchange="itemsTotalPrice();">
												   <option value="">Quantity</option>
												 </select>
                                              </center><br><br>
                                        </div>
                                        <div class="col-md-3"></div>
                                      </div>

                                      <div class="col-md-12">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                              <center>Item 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <select name="item2_title" id="item2_title" onchange="get_item2_qunatity(); itemsTotalPrice();">
												 <option value="">Choose Item</option>
                                                  <?php  $item2titleQuery = mysqli_query($conn,"select * from items");

                                                 while($item2title = mysqli_fetch_array($item2titleQuery))
                                                  {
                                                ?>
                                                 <option><?php echo $item2title['item_title']; ?></option>

                                             <?php } ?>
                                                </select>
                                              </center><br><br>
                                        </div>
                                        <div class="col-md-3">
                                              <center>Quantity
                                                <select name="item2_quantity" id="item2_quantity" onchange="itemsTotalPrice();">
													<option value="">Quantity</option>
											     </select>
                                              </center><br><br>
                                        </div>
                                        <div class="col-md-3"></div>
                                      </div>

									  
									  
                                      <div class="col-md-12">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                              <center>Item 3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <select name="item3_title" id="item3_title" onchange="get_item3_qunatity(); itemsTotalPrice();">
												 <option value="">Choose Item</option>
                                                  <?php  $item3titleQuery = mysqli_query($conn,"select * from items");

                                                 while($item3title = mysqli_fetch_array($item3titleQuery))
                                                  {
                                                ?>
                                                 <option><?php echo $item3title['item_title']; ?></option>

                                             <?php } ?>
                                                </select>
                                              </center><br><br>
                                        </div>
                                        <div class="col-md-3">
                                              <center>Quantity
                                                <select name="item3_quantity" id="item3_quantity" onchange="itemsTotalPrice();">
													<option value="">Quantity</option>
											     </select>
                                              </center><br><br>
                                        </div>
                                        <div class="col-md-3"></div>
                                      </div>
									  
                                      <div class="col-md-12">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                              <center>Item 4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <select name="item4_title" id="item4_title" onchange="get_item4_qunatity(); itemsTotalPrice();">
												  <option value="">Choose Item</option>
                                                  <?php  $item4titleQuery = mysqli_query($conn,"select * from items");

                                                 while($item4title = mysqli_fetch_array($item4titleQuery))
                                                  {
                                                ?>
                                                 <option><?php echo $item4title['item_title']; ?></option>

                                             <?php } ?>
                                                </select>
                                              </center><br><br>
                                        </div>
                                        <div class="col-md-3">
                                              <center>Quantity
                                                <select name="item4_quantity" id="item4_quantity" onchange="itemsTotalPrice();">
													<option value="">Quantity</option>
											     </select>
                                              </center><br><br>
                                        </div>
                                        <div class="col-md-3"></div>
                                      </div>
									  
									  

                                        <div class="col-md-12">
                                              <center>Actual Price<input type="text" name="productActualPrice" class="form-control" placeholder="Actual price" style="width:50%" readonly></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                              <center>Enter Sale Price<input type="text" name="productPrice" class="form-control" placeholder="Enter Sale price" style="width:50%"></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                              <center>Short Description<input type="text" name="shortDescription" class="form-control" placeholder="Enter Short Description" style="width:50%"></center><br><br>
                                        </div>
                                        <div class="col-md-12">
                                              <center>Full description<input type="text" name="description" class="form-control" placeholder="Enter product Description" style="width:50%"></center><br><br>
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

function getSubcategory()
{
          var category = $("#category").val();
          var dataString = 'category='+ category;
          $.ajax({
              type: "POST",
              url: "get_subcategory.php",
              data: dataString,
              success: function(data)
              {
                  $('select[name="subcategory"]').html(data);
              }
          });

          return false;

}


$("#addProductForm").submit(function(e){

                  var category = $('#addProductForm').find('select[name="category"]').val();
                  var subcategory = $('#addProductForm').find('select[name="subcategory"]').val();
                  var productId = $('#addProductForm').find('input[name="productId"]').val();
                  var productName = $('#addProductForm').find('input[name="productName"]').val();
                  var productImage = $('#addProductForm').find('input[name="productImage"]').val();
                  var productPrice = $('#addProductForm').find('input[name="productPrice"]').val();
                  var dataString = 'subcategory='+subcategory+'&productId='+productId+'&productName='+productName+'&productImage='+productImage+'&productPrice='+productPrice;


                  if(category=='Select Category' || category=='')
                  {
                          $("#error").html("Please choose category").slideDown("slow");
                          $("#error").html("Please choose category").slideUp("slow");
                  		    return false;
                  }
                  else if(subcategory=='Select Subategory' || subcategory==null)
                  {
                          $("#error").html("Please choose subcategory").slideDown("slow");
                          $("#error").html("Please choose subcategory").slideUp("slow");
                  		    return false;
                  }
                  else if(productName=='')
                  {
                          $("#error").html("Enter Product Name").slideDown("slow");
                          $("#error").html("Enter Product Name").slideUp("slow");
                  		    return false;
                  }
                  else if(productPrice=='')
                  {
                          $("#error").html("Enter Product Price").slideDown("slow");
                          $("#error").html("Enter Product Price").slideUp("slow");
                          return false;
                  }
                  else
                  {
                          return true;
                  }
    });


</script>

<script>

function get_item1_qunatity(){
	 var item1_title = $("#item1_title").val();
	 
	      var dataString = "item_title="+item1_title;
	
	 
	                     $.ajax({
                          type: "POST",
                          url: "get_items_quantity.php",
                          data: dataString,
                          success: function(response){
                            $('select[name="item1_quantity"]').html(response);
                          }
                        });
	 
}

function get_item2_qunatity(){
	 var item2_title = $("#item2_title").val();
	 
	      var dataString = "item_title="+item2_title;
	
	 
	                     $.ajax({
                          type: "POST",
                          url: "get_item2_quantity.php",
                          data: dataString,
                          success: function(response){
                           alert(response);
                          }
                        });

}	
	
function get_item3_qunatity(){
	 var item3_title = $("#item3_title").val();
	      var dataString = "item_title="+item3_title;
	
	 
	                     $.ajax({
                          type: "POST",
                          url: "get_items_quantity.php",
                          data: dataString,
                          success: function(response){
                            $('select[name="item3_quantity"]').html(response);
                          }
                        });

}	

function get_item4_qunatity(){
	 var item4_title = $("#item4_title").val();
	      var dataString = "item_title="+item4_title;	 
	
	 
	                     $.ajax({
                          type: "POST",
                          url: "get_items_quantity.php",
                          data: dataString,
                          success: function(response){
                            $('select[name="item4_quantity"]').html(response);
                          }
                        });

}	

 function itemsTotalPrice(){
	 
	 var item1_title = $("#item1_title").val();
	 var item1_quantity = $("#item1_quantity").val();	
	 var item2_title = $("#item2_title").val();
	 var item2_quantity = $("#item2_quantity").val();
	 var item3_title = $("#item3_title").val();
	 var item3_quantity = $("#item3_quantity").val();
	 var item4_title = $("#item4_title").val();
	 var item4_quantity = $("#item4_quantity").val();
	 
     var dataString = "item1_title="+item1_title+"&item1_quantity="+item1_quantity+"&item2_title="+item2_title+"&item2_quantity="+item2_quantity+"&item3_title="+item3_title+"&item3_quantity="+item3_quantity+"&item4_title="+item4_title+"&item4_quantity="+item4_quantity;
	 
	
	 
	                     $.ajax({
                          type: "POST",
                          url: "get_items_price.php",
                          data: dataString,
                          success: function(response){
                             $('input[name="productActualPrice"]').val(response);
                          }
                        });

	 
 }

</script>


<?php include("footer.php"); ?>
<?php
}
else
{
   header("location:index.php");
}
?>
