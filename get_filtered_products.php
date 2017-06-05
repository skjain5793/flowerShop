<?php
include("config.php");

 $minPrice = $_POST['min_price'];
 $maxPrice = $_POST['max_price'];
 

		$fetchProductsQuery = mysqli_query($conn,"SELECT * FROM products WHERE price BETWEEN $minPrice AND $maxPrice");

		while($products=mysqli_fetch_array($fetchProductsQuery))
		{
			
	?>		
			
						<li class="col-xs-6 col-sm-6 col-md-4 col-lg-3 post-556 product type-product status-publish has-post-thumbnail" data-postID="post-556">
<div class="product-entry">

		<div class="product-image product-image-style3">
		<a href="#" class="woocommerce-LoopProduct-link">			<div class="product-highlight">




<!--				<div class="onsale"><span>50% Off</span></div> -->
			</div>
		<img width="300" height="351" src="admin/products/<?php echo $products['image']; ?>" class="front-image wp-post-image" alt="" /></a>			<div class="product-slider-controls owl-nav post-556">
				<div class="owl-prev"></div>
				<div class="owl-next"></div>
			</div>


		<div class="product-buttons">

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-556">
		    <div class="yith-wcwl-add-button hide" style="display:none">


<a href="#" rel="nofollow" data-product-id="556" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>



	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="556" rel="nofollow">Compare</a></div>				
			<!--	<div class="quickview-button">
					<a class="quickview" href="#"  data-toggle="modal" data-target="#myModal" data-product_id="556">Quick View</a>
				</div>		-->
				
								
			
			    <div class="quickview-button">
				<!--	<a class="quickview"  href="#deletepost-<?php // echo $products['pid'];?>" data-toggle="modal"  data-product_id="556">Quick View</a> -->
				
				
              <a class="quickview" href="productDetails.php?id=<?php echo $products['pid']; ?>" >Quick View</a>	

				

				</div>		
			
				</div>




		</div>

		<div class="product-content">

		<div class="product-title-rating">		
		<a class="product-title" href="productDetails.php?id=<?php echo $products['pid']; ?>">     <h3><?php echo $products['name']; ?></h3>		</a>
		<!--<div class="product-rating"> <div class="rating-content"> <div class="star-rating" title="4"><span style="width:80%"><strong class="rating">4</strong> out of 5</span> </div><span class="product-rating-count">(3)</span></div></div>-->
		</div>		<div class="short-description">
			<p class="co"><?php echo $products['description']; ?>.</p>
		</div>
		<div class="product-loop-price">
	<span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs.</span><?php echo $products['actual_price']; ?></span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span><?php echo $products['price']; ?></span></ins></span>

		</div>
		<div class="product-buttons">

		<div class=""> <!-- product-cart class -->
		<a rel="nofollow"  href="cartAction.php?action=addToCart&id=<?php echo $products['pid']; ?>" id="<?php echo $products['pid']; ?>" data-quantity="1" data-product_id="556" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
		</div>

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-556">
		    <div class="yith-wcwl-add-button hide" style="display:none">


<a href="#" rel="nofollow" data-product-id="556" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>



	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="556" rel="nofollow">Compare</a></div>			
         <!--   <div class="quickview-button">
				<a class="quickview" href="#"  data-toggle="modal" data-target="#myModal" data-product_id="556">Quick View </a>
			</div> -->
			
				
			<div class="quickview-button">
				<!--	<a class="quickview" href="#deletepost-<?php // echo $products['pid'];?>" data-toggle="modal" data-product_id="556">Quick View</a>-->
				  <a class="quickview" href="productDetails.php?id=<?php echo $products['pid']; ?>">Quick View</a>	
		
		    </div>		
			
			
		</div>

		</div>
			</div>
			
			
			


<!--
<div class="modal fade" id="deletepost-<?php // echo $products['pid'];?>" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php // echo $products['name']; ?></h4>
        </div>
        <div class="modal-body">
			<div class="row">
				<div class="col-md-6"><img src="admin/products/<?php // echo $products['image'];?>" class="img-rounded img-responsive img-full"></div>
				<div class="col-md-6">
					<strong>Product : </strong><?php // echo $products['name']; ?> <br> <br>
					<strong>Price : </strong><del>Rs. <?php // echo $products['actual_price']; ?></del>  <ins>Rs. <?php // echo $products['price']; ?></ins>  <br><br>
					<strong>Description : </strong><?php // echo $products['description']; ?>

				</div>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
-->


			
			
			

</li>
			
			
			
			
			
		<?php	
						
		}

?>

