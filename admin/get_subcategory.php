<?php
include'../config.php';

$category = $_POST['category'];

$sql=mysqli_query($conn,"SELECT subcategories.subcategory FROM subcategories INNER JOIN categories ON categories.cid=subcategories.cid where category='$category'");

while($res=mysqli_fetch_array($sql))
{ ?>
<option><?php echo $res['subcategory']; ?></option>
<?php } ?>
