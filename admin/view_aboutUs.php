<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<?php include("../config.php"); ?>

<?php

$fetchAboutUsQuery = mysqli_query($conn,"select * from about_us");

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
                        <th>About Us</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        <?php

                        $srno = 0;

                          while($fetchAboutUs = mysqli_fetch_array($fetchAboutUsQuery))
                          {
                                 $srno++;
								 $aboutusId = $fetchAboutUs['id'];
                                 $aboutUs = $fetchAboutUs['aboutUs'];
                          ?>
                          <tr>
                            <td><?php echo $srno; ?></td>
                            <td><?php echo $aboutUs; ?></td>
                            <td>
                                  <a href="edit_aboutUs.php?id=<?php echo $aboutusId; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <a href="delete_aboutUs.php?id=<?php echo $aboutusId; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
