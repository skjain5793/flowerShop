<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<?php include("../config.php"); ?>

<?php

$fetchSlidesQuery = mysqli_query($conn,"select * from slides");

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
                          while($fetchSlides = mysqli_fetch_array($fetchSlidesQuery))
                          {	
					  
								$slideId = $fetchSlides['slide_id'];
                          ?>
                          <tr>
						  <?php 					
 						  $slide_images = unserialize($fetchSlides['slide_images']);
							  	for($i=0;$i<count($slide_images);$i++)
								{
						  ?>
                            <td><img src="slides/<?php echo $slide_images[$i]; ?>" style="height:50px"></td>
								<?php } ?>
                            <td>
                               <a href="edit_slides.php?id=<?php echo $slideId; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <a href="delete_slides.php?id=<?php echo $slideId; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
