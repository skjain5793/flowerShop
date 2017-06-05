<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<?php include("../config.php"); ?>

<?php

$fetchBannersQuery = mysqli_query($conn,"select * from banners");

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
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
				

                        <?php
                          while($fetchBanners = mysqli_fetch_array($fetchBannersQuery))
                          {	
					  
								$bannerId = $fetchBanners['bid'];
                          ?>
                          <tr>
						  <?php 					
 						  $banner_images = unserialize($fetchBanners['banner_images']);
							  	for($i=0;$i<count($banner_images);$i++)
								{
						  ?>
                            <td><img src="banners/<?php echo $banner_images[$i]; ?>" style="height:50px"></td>
								<?php } ?>
                            <td>
                               <a href="edit_banners.php?id=<?php echo $bannerId; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <a href="delete_banners.php?id=<?php echo $bannerId; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
