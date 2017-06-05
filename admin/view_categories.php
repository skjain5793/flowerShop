<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<?php include("../config.php"); ?>

<?php

$fetchCategoryQuery = mysqli_query($conn,"select * from categories");

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
                        <th>Sr. No.</th>
                        <th>Category</th>
						<th>Meta Tag</th>
						<th>Meta Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        <?php

                        $srno = 0;

                          while($fetchCategory = mysqli_fetch_array($fetchCategoryQuery))
                          {
                                 $srno++;
								 $categoryId = $fetchCategory['cid'];
                                 $category = $fetchCategory['category'];
								 $meta_tag = $fetchCategory['meta_tag'];
								 $meta_description = $fetchCategory['meta_description'];
                          ?>
                          <tr>
                            <td><?php echo $srno; ?></td>
                            <td><?php echo $category; ?></td>
							<td><?php echo $meta_tag; ?></td>
							<td><?php echo $meta_description; ?></td>
                            <td>
                                  <a href="edit_category.php?id=<?php echo $categoryId; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <a href="delete_category.php?id=<?php echo $categoryId; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
