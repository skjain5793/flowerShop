
<?php 

include("config.php");

if(isset($_POST['submitreview']))
{
    	$name = $_POST['author'];
    	$email = $_POST['useremail'];
    	$rating = $_POST['rating'];
    	$comment = $_POST['comment'];
        $category = $_POST['category'];
        $id = $_POST['pid'];

if($name =='')
{
	?><script LANGUAGE='javascript'>
	
	var category = "<?php echo $category; ?>"; 
	var id = "<?php echo $id; ?>";
	
	alert('Enter your name!');
	window.location="productDetails.php?category="+category+"&id="+id;	
	</script>
<?php 
}

elseif($email =='')
{
	?><script LANGUAGE='javascript'>
	
	var category = "<?php echo $category; ?>"; 
	var id = "<?php echo $id; ?>";
	
	alert('Enter your email id!');
	window.location="productDetails.php?category="+category+"&id="+id;	
	</script>
<?php 
}
else
{

	
	$submitReviewQuery = mysqli_query($conn,"insert into reviews(pid,name,email,rating,comment,datetime)values('$id','$name','$email','$rating','$comment',now())");
	  if($submitReviewQuery)
	  { ?>
    <script LANGUAGE='javascript'>
	
	var category = "<?php echo $category; ?>"; 
	var id = "<?php echo $id; ?>";
	
	alert('Thanks for your feedback!');
	window.location="productDetails.php?category="+category+"&id="+id;	
	</script>

      <?php  }
	  else
	  { ?>
    <script LANGUAGE='javascript'>
	
	var category = "<?php echo $category; ?>"; 
	var id = "<?php echo $id; ?>";
	
	alert('Something went wrong. Try again!');
	window.location="productDetails.php?category="+category+"&id="+id;	
	</script>
	<?php  }
}	
}

?>


