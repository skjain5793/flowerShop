<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.form.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>






<?php

session_start();
  ?>

  
  
  
  
  
  <a id="btnEmpty" href="remove_cart.php?action=empty">Empty Cart</a> <br><br>
  

  <?php
  if(isset($_SESSION["cart_item"])){
      $item_total = 0;
  ?>

  <?php

  $i=0;

      foreach ($_SESSION["cart_item"] as $item)
   {
     ?>


<?php echo $item["name"]; ?>
<?php echo $item["pid"]; ?>
<?php echo $item["quantity"]; ?>
<?php echo "Rs. ".$item["price"]; ?>

<a href="#"><span  title="<?php echo $item["pid"]; ?>" onclick="removeItem(this.title)">Remove</span></a><br>


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
  </div>



  <?php
}
?>

  
  
  
  
  
  
  
  
  
<script>

function removeItem(id)
{

alert(id);
/*     var product_code=$("#product_code"+index).html();


	   var quantity = $("#quantity"+index).val();

       var table = "<?php // echo $tab; ?>";
*/

$.ajax(
 {
		 url: "remove_cart.php?action=remove&pid=="+id,
		 success: function (value) {
		  alert(value);
		 }
 });


}

</script>
