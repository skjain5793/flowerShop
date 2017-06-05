<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<?php include("../config.php"); ?>

<?php

$fetchItemsQuery = mysqli_query($conn,"select * from items");

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
                        <th>Item Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>


                        <?php
                          while($fetchItems = mysqli_fetch_array($fetchItemsQuery))
                          {

								                  $item_id = $fetchItems['item_id'];
                          ?>
                          <tr>
                            <td><img src="items/<?php echo $fetchItems['item_image']; ?>" style="height:50px"></td>
                            <td><?php echo $fetchItems['item_title']; ?></td>
                            <td><?php echo $fetchItems['item_price']; ?></td>
                            <td><?php echo $fetchItems['item_stock']; ?></td>
                            <td>
                               <a href="edit_items.php?id=<?php echo $item_id; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <a href="delete_items.php?id=<?php echo $item_id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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

<?php include("footer.php"); ?>
<?php
}
else
{
    header("location:index.php");
}
?>
