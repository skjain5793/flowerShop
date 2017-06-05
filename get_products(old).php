

<?php

include "config.php";

$subcategoryId = $_GET['sid'];

$fetchProductsQuery = mysqli_query($conn,"select * from products where sid = '$subcategoryId'");

?>





<ul class="products product-style1 product-carousel" data-navigation="1" data-pagination="0">












<?php


while($row=mysqli_fetch_assoc($fetchProductsQuery))
{
$product_array[]=$row;
}



if (!empty($product_array)) {


  $i=0;

  foreach($product_array as $key=>$value){
    $id = $product_array[$key]["pid"];
    $productName = $product_array[$key]["name"];
    $productImage = $product_array[$key]["image"];
    $actual_price = $product_array[$key]["actual_price"];
    $price = $product_array[$key]["price"];;
?>

<div style="width: 228px;" class="owl-item active">

<li class="slide-row">
          <ul>
                      <li class="col-xs-6 col-sm-6 col-md-4 col-lg-3 post-551 product type-product status-publish has-post-thumbnail product_cat-fragrance product_cat-fragrances-deodorants product_cat-mens-skincare product_cat-mens-grooming product_cat-shavers-and-trimmers product_tag-fragrance product_tag-men  instock sale taxable shipping-taxable purchasable product-type-simple" data-postID="post-551">
<div class="product-entry">

<div class="product-image product-image-style3">
<a href="#" class="woocommerce-LoopProduct-link">			<div class="product-highlight">




<!--<div class="onsale"><span>40% Off</span></div>-->
</div>
<img width="300" height="351" src="admin/products/<?php echo $productImage; ?>" class="front-image wp-post-image" alt="" /><ul class="product_image_gallery owl-carousel owl-theme"><li><img width="300" height="351" src="images/slider-001.png" class="front-image wp-post-image" alt="" /></li><li><img width="300" height="351" src="images/Fogg-Monarch-Fragrance-Body-Spray-for-Men-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="images/Women-Carolina-Herrera-212-Sexy-100-ml-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="images/Fogg-Monarch-Fragrance-Body-Spray-for-Men-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="images/Skinn-by-Titan-Sheer-Womens-Fragrance-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="images/Elizabeth-Arden-5Th-Avenue-EDP-Women-125-ml-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li></ul></a>			<div class="product-slider-controls owl-nav post-551">
<div class="owl-prev"></div>
<div class="owl-next"></div>
</div>


<div class="product-buttons">

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-551">
<div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="551" data-product-type="simple" class="add_to_wishlist" >
Add to Wishlist</a>
<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
</div>

<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
  <span class="feedback">Product added!</span>
  <a href="#" rel="nofollow">
      Browse Wishlist	        </a>
</div>

<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
  <span class="feedback">The product is already in the wishlist!</span>
  <a href="#" rel="nofollow">
      Browse Wishlist	        </a>
</div>

<div style="clear:both"></div>
<div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="551" rel="nofollow">Compare</a></div>				<div class="quickview-button">
  <a class="quickview" href="#" data-product_id="551">Quick View</a>
</div>		</div>




</div>

<div class="product-content">

<div class="product-title-rating">		<a class="product-title" href="#">
<h3 id = "<?php echo $id; ?>" onclick="product_details(this.id)"><?php echo $productName; ?></h3>		</a>
<div class="product-rating"> <div class="rating-content">
  <!--<div class="star-rating" title="4">
<!--  <span style="width:80%">
<strong class="rating">4</strong> out of 5</span> </div>
<span class="product-rating-count">(1)</span></div></div>
</div>-->
		<div class="short-description">
<p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
</div>
<div class="product-loop-price">
<span class="price">
  <del><span class="woocommerce-Price-amount amount">
  <span class="woocommerce-Price-currencySymbol">&#x20a8;</span><?php echo $actual_price; ?></span></del>
  <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#x20a8;</span>
    <?php echo $price; ?>
  </span></ins></span>

</div>
<div class="product-buttons">

<div class="product-cart">
<a rel="nofollow" title="<?php echo $id; ?>" href="#" data-quantity="1" data-product_id="551" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart" onclick="add(this.title)">Add to cart</a>
</div>

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-551">
<div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="551" data-product-type="simple" class="add_to_wishlist" >
Add to Wishlist</a>
<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
</div>

<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
  <span class="feedback">Product added!</span>
  <a href="#" rel="nofollow">
      Browse Wishlist	        </a>
</div>

<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
  <span class="feedback">The product is already in the wishlist!</span>
  <a href="#" rel="nofollow">
      Browse Wishlist	        </a>
</div>

<div style="clear:both"></div>
<div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="551" rel="nofollow">Compare</a></div>			<div class="quickview-button">
<a class="quickview" href="#" data-product_id="551">Quick View</a>
</div>
</div>

</div>
</div>

</div>

</li>
                        </ul>
        </li>



</form>

</div>


<?php
  }

}

?>

</ul>

<script>


function product_details(id)
{
  window.location ="product.php?id="+id;
}

function add(id)
{


/*     var product_code=$("#product_code"+index).html();


	   var quantity = $("#quantity"+index).val();

       var table = "<?php // echo $tab; ?>";
*/

            $.ajax(
             {
                 url: "add_remove_cart.php?action=add&quantity=1&id="+id,
                 success: function (value) {
                   alert("done");
alert(value);
//                    $("#cart").html(value);

                 }
             });


}

setTimeout(function () {
   window.location.href= 'index.php'; // the redirect goes here

},2000);


</script>
