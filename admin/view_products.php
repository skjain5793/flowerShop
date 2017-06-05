<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<?php include("../config.php"); ?>

<?php

$fetchProductQuery = mysqli_query($conn,"select * from products");

?>

<?php include("header.php"); ?>

<?php include("left_sidebar.php"); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                  <table class="table ">
                    <thead>
                      <tr>
                        <th>Sr No.</th>
                        <th>Product Title</th>
                        <th>Product Image</th>
                        <th>Actual Price</th>
                        <th>Sale Price</th>
						<th>Item 1</th>
						<th>Item 2</th>
						<th>Item 3</th>
						<th>Item 4</th>
						<th>Short Description</th>
                        <th>Product Description</th>
						<th>Option</th>					
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        <?php
                          $srno=0;

                          while($fetchProducts = mysqli_fetch_array($fetchProductQuery))
                          {
                                 $srno++;
                                 $productId = $fetchProducts['pid'];
                                 $name = $fetchProducts['name'];
                                 $image = $fetchProducts['image'];
                                 $actual_price = $fetchProducts['actual_price'];
                                 $price = $fetchProducts['price'];
								 $item1 = $fetchProducts['item1_title'];
								 $item2 = $fetchProducts['item2_title'];
								 $item3 = $fetchProducts['item3_title'];
								 $item4 = $fetchProducts['item4_title'];
								 $short_description = $fetchProducts['short_description'];
                                 $description = $fetchProducts['description'];
                          ?>
                          <tr>
                            <td><?php echo $srno; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><img src="products/<?php echo $image; ?>" style="height:50px"></td>
                            <td><?php echo $actual_price; ?></td>
                            <td><?php echo $price; ?></td>
							<td><?php echo $item1; ?></td>
							<td><?php echo $item2; ?></td>
							<td><?php echo $item3; ?></td>
							<td><?php echo $item4; ?></td>
							<td><?php echo $short_description; ?></td>
                            <td><?php echo $description; ?></td>
				   <form method="post" action = "">			
							<td>
								<input type="hidden" name="productId" value="<?php echo $productId; ?>">
								<select name="option" style="width:102px">
									<option value="today_deal">Today Deals</option>
									<option value="best_selling">Best Sellings</option>
									<option value="features_deal">Features Deal</option> 
								</select>
								<button type="submit" name="addoption"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
							</td>
					</form>							
                            <td>
                               <a href="edit_product.php?id=<?php echo $productId; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <a href="delete_product.php?id=<?php echo $productId; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <?php
                          }
                         ?>

                       </tbody>
                     </table>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	
	<?php
	if(isset($_POST['addoption']))
	{
	$productId = $_POST['productId']; 
	$option = $_POST['option'];
	
	$UpdateProductOption = mysqli_query($conn,"update products set addoption='$option' where pid='$productId'");
	
  if($UpdateProductOption)
  {
    echo ("<script LANGUAGE='javascript'>
    alert('Product added in option!');
    window.location='view_products.php';
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
