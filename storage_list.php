<?php
include_once 'header.php';

if(isset($_POST['add_to_cart'])){

  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];

  $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'") or die('query failed');

  if(mysqli_num_rows($select_cart) > 0){
     $message[] = 'product already added to cart!';
  }else{
     mysqli_query($conn, "INSERT INTO `cart`(name, price) VALUES('$product_name', '$product_price')") or die('query failed');
     $message[] = 'product added to cart!';
  }

};

if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
  header('location:my_cart.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage List</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

    <div class="container">
    <div class="row">
        <div class="">
            <h1 class="text-center py-5 text-primary">Storage List</h1> 
        </div>
       
  <hr>
  </div>

  <table class="table table-striped table-bordered" >
  <thead>
    <tr>
      <th>SN</th>
      <th>Name</th>
      <th>Capacity</th>
      <th>Price</th>
      <th>Details</th>
      <th>Select</th>
    </tr>
  </thead>
  <tbody>

  <?php

include_once 'admin/dbconn.php'; 

$select = "SELECT * FROM storage"; 

$run = mysqli_query($conn,$select);

while($row_storage = mysqli_fetch_array($run)){
    $s_id = $row_storage['s_id'];
    $s_name = $row_storage['s_name'];
    $s_capacity = $row_storage['s_capacity'];
    $s_price = $row_storage['s_price'];
    $s_details = $row_storage['s_details'];

  ?>
    <tr>
    <form action="" method="post">
      <td><?php echo $s_id; ?></td>
      <td><?php echo $s_name; ?></td>
      <td><?php echo $s_capacity; ?></td>
      <td><?php echo $s_price; ?></td>
      <td><?php echo "<pre>".$s_details."</pre>"; ?></td>
       <input type="hidden" name="product_name" value="<?php echo $s_name; ?>">
      <input type="hidden" name="product_price" value="<?php echo $s_price; ?>">
      <td><input type="submit" value="Add To Cart" name="add_to_cart" class="btn btn-warning btn-block "></td>
      </form> 
      
    </tr>
<?php  } ?>

  </tbody>
</table>


</div>
</body>
</html>