<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<?php include("../config.php"); ?>

<?php

$fetchSubcategoryQuery = mysqli_query($conn,"select * from subcategories");

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
                        <th>Subcategory</th>
						<th>Meta Tag</th>
						<th>Meta Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        <?php
                          $srno = 0;
                          while($fetchSubcategory = mysqli_fetch_array($fetchSubcategoryQuery))
                          {
                                 $srno++;
                                 $subcategoryId = $fetchSubcategory['sid'];
                                 $subcategory = $fetchSubcategory['subcategory'];
								 $meta_tag = $fetchSubcategory['meta_tag'];
								 $meta_description = $fetchSubcategory['meta_description'];
                          ?>
                          <tr>
                            <td><?php echo $srno; ?></td>
                            <td><?php echo $subcategory; ?></td>
							<td><?php echo $meta_tag; ?></td>
							<td><?php echo $meta_description; ?></td>
                            <td>
                                <a href="edit_subcategory.php?id=<?php echo $subcategoryId; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="delete_subcategory.php?id=<?php echo $subcategoryId; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
