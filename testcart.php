<?php
session_start();
include("connect.php");



?>






    <div class="col-sm-5  bck-clr">
    	<center><h4 style="color:#900820 !important">MENU</h4></center><hr>





<?php



 $tab = $_GET['q'];


 $result=mysqli_query($conn,"select * from $tab");

 while($row=mysqli_fetch_assoc($result))
 {
 $product_array[]=$row;
 }



 if (!empty($product_array)) {

	 $i=0;

   foreach($product_array as $key=>$value){
 ?>



<!-- <td><a href="products.php?action=remove&code=<?php // echo $item["code"]; ?>" id="remove"  class="btnRemoveAction">Remove</a></td>products.php?action=add&cat=<?php //echo $tab; ?>&code=<?php //echo $product_array[$key]["code"]; ?>-->
 <form method="post" action="">



 <div id="product_code<?php echo $i;?>" style="display:none"><?php echo $product_array[$key]["code"]; ?></div>


       <div class="row txt-color"  style="padding:2%">
 <!--	<div class="product-image"><img src="<?php // echo $product_array[$key]["image"]; ?>"></div>-->
 <div class="col-md-4 product_name" id="product_name<?php echo $i;?>"><?php echo $product_array[$key]["name"]; ?></div>
 <div class="col-md-4 product_price"">Rs. <div id="product_price<?php echo $i;?>"><?php echo $product_array[$key]["price"]; ?></div></div>
 <div  class="col-md-2 quantity"><input type="text" name="quantity" id="quantity<?php echo $i;?>" value="1" size="2" /></div>
  <!--     <div  class="col-md-2"><input type="submit" value="+" class="btnAddAction" id="btnAddAction" /></div>-->

  	<input type="button" name="login" id="register" title="<?php echo $i; ?>" onclick="add(this.title)" class="login loginmodal-submit btnAddAction" value="+">
       </div>
 </form>

 <?php

 $i++;

     }
 }







 ?>











     </div>







<div id="cart">






  <div class="col-sm-4  bck-clr">


 <center><h4 style="color:#900820 !important">CART</h4></center>    <hr>



  <?php
  if(isset($_SESSION["cart_item"])){
      $item_total = 0;
  ?>

<center>
  <table class="table-responsive txt-color">
  <tbody>

  <tr>
  <th><strong>Name</strong></th>
  <th><strong>Code</strong></th>
  <th><strong>Quantity</strong></th>
  <th><strong>Price</strong></th>
  <th><strong>Action</strong></th>
  </tr>
  <?php

  $i=0;

      foreach ($_SESSION["cart_item"] as $item)
   {
     ?>

<div id="code<?php echo $i;?>" style="display:none"><?php echo $item["code"]; ?></div>

         <tr>
         <td><?php echo $item["name"]; ?></td>
         <td><?php echo $item["code"]; ?></td>
         <td><?php echo $item["quantity"]; ?></td>
         <td><?php echo "Rs. ".$item["price"]; ?></td>

<td><button class="btnRemoveAction" title="<?php echo $i; ?>" onclick="remove(this.title)">Remove</button></td>



         </tr>
         <?php
          $item_total += ($item["price"]*$item["quantity"]);
          $i++;
     }
     ?>
  </tbody>
  </table>

  <div class="row" style="padding-bottom:2%;padding-top:2%;">
    <div class="col-md-5 txt-color">
      <strong>Total:</strong> <?php echo "Rs. ".$item_total; ?>
      </div>
      <div class="col-md-7" style="float:right">
       <button class="checkout">Checkout</button>
      </div>
  </div>



  <?php
}
?>

</center>




  </div>









</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

 <script>

function remove(index)
{
  var product_code=$("#code"+index).html();

  $.ajax(
   {
       url: "cart-products.php?action=remove&code="+product_code,
       success: function (value) {

          $("#cart").html(value);

       }
   });

}


function add(index)
{



     var product_code=$("#product_code"+index).html();


	   var quantity = $("#quantity"+index).val();

       var table = "<?php echo $tab; ?>";

            $.ajax(
             {
                 url: "cart-products.php?action=add&category="+table+"&code="+product_code+"&quantity="+quantity,
                 success: function (value) {

                    $("#cart").html(value);

                 }
             });


}



 </script>
