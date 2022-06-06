<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Edit RAM Details</title>
</head>
<body>
<div class="container">

<?php

      include_once '../dbconn.php'; 

      if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];

        $select = "SELECT * FROM ram WHERE r_id = $edit_id ";

         $run = mysqli_query($conn,$select);
         $row_ram = mysqli_fetch_array($run);

         $r_name = $row_ram['r_name'];
         $r_capacity = $row_ram['r_capacity'];
         $r_price = $row_ram['r_price'];
         $r_details = $row_ram['r_details'];
          
      }
  ?>


<form action="" method="post" enctype= "multipart/form-data">
      <h1 class="text-center py-5"> Edit details of the RAM</h1>
      
        <div class="mb-3">
            <label class="form-label">RAM Name</label>
            <input type="text" name="r_name" class="form-control"  value = "<?php echo $r_name; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">RAM Capacity</label>
            <input type="text" name="r_capacity" class="form-control"  value = "<?php echo $r_capacity; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Price </label>
            <input type="number" name="r_price" class="form-control" value = "<?php echo $r_price; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">RAM Details</label>
           <textarea rows="4" cols="50" class="form-control" name="r_details"><?php echo $r_details; ?> </textarea>
        </div>
        <button type="submit" name="insert-btn" class="btn btn-success">Submit</button>
</form>

<?php

include_once '../dbconn.php'; 

if(isset($_POST['insert-btn'])){

    $er_name = $_POST['r_name'];
    $er_capacity = $_POST['r_capacity'];
    $er_price = $_POST['r_price'];
    $er_details = $_POST['r_details'];

   $update = "UPDATE ram SET r_name='$er_name',r_capacity='$er_capacity',r_price='$er_price',r_details='$er_details' WHERE r_id='$edit_id' ";

    $run_update = mysqli_query($conn, $update);

    if($run_update == true){
        echo "data updated";
        header("Location: ram_data.php");

    }else{
        echo "update failed";
    }

}


?>



</div>
 
</body>
</html>