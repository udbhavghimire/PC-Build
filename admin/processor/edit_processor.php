<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Edit Processor Details</title>
</head>
<body>
<div class="container">

<?php

      include_once '../dbconn.php'; 

      if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];

        $select = "SELECT * FROM processor WHERE p_id = $edit_id ";

         $run = mysqli_query($conn,$select);
         $row_processor = mysqli_fetch_array($run);

         $p_name = $row_processor['p_name'];
         $p_price = $row_processor['p_price'];
         $p_details = $row_processor['p_details'];
          
      }
  ?>


<form action="" method="post" enctype= "multipart/form-data">
      <h1 class="text-center py-5"> Edit details of the Processor</h1>
      
        <div class="mb-3">
            <label class="form-label">Processor Name</label>
            <input type="text" name="p_name" class="form-control"  value = "<?php echo $p_name; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Price </label>
            <input type="number" name="p_price" class="form-control" value = "<?php echo $p_price; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Processor Details</label>
           <textarea rows="4" cols="50" class="form-control" name="p_details"><?php echo $p_details; ?> </textarea>
        </div>
        <button type="submit" name="insert-btn" class="btn btn-success">Submit</button>
</form>

<?php

include_once '../dbconn.php'; 

if(isset($_POST['insert-btn'])){

    $ep_name = $_POST['p_name'];
    $ep_price = $_POST['p_price'];
    $ep_details = $_POST['p_details'];

   $update = "UPDATE processor SET p_name='$ep_name',p_price='$ep_price',p_details='$ep_details' WHERE p_id='$edit_id' ";

    $run_update = mysqli_query($conn, $update);

    if($run_update == true){
        echo "data updated";
        header("Location: processor_data.php");

    }else{
        echo "update failed";
    }

}


?>



</div>
 
</body>
</html>