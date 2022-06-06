<?php
include_once 'header.php';
?>

<div class="container">
<h1 class="heading text-center">Shopping Cart</h1>
<table class="table table-bordered">
  <thead>
    <th>Name</th>
    <th>Price</th>
    <th>Total Price</th>
    <th>Action</th>
  </thead>
  <tbody>
    <?php
     $cart_query = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
     $grand_total = 0;
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
    ?>
    <tr>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>Rs.<?php echo $fetch_cart['price']; ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
               </form>
               Rs.<?php echo $sub_total = ($fetch_cart['price']);?>
            </td>
            <td><a href="processor_list.php?remove=<?php echo $fetch_cart['id']; ?>" class="btn btn-danger" onclick="return confirm('remove item from cart?');">Remove</a></td>
         </tr>

     <?php
         $grand_total += $sub_total;
            }
         }else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
         }
      ?>
      <tr class="table-bottom">
         <td colspan="2"><strong> Grand Total :</strong></td>
         <td colspan="2"><strong>Rs.<?php echo $grand_total; ?>/-</strong></td>
      </tr>
  </tbody>
</table>
</div>
