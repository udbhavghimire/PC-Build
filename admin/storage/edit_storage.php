<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Edit Storage Details</title>
</head>
<body>
<div class="container">

<?php

      include_once '../dbconn.php'; 

      if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];

        $select = "SELECT * FROM storage WHERE s_id = $edit_id ";

         $run = mysqli_query($conn,$select);
         $row_storage = mysqli_fetch_array($run);

         $s_name = $row_storage['s_name'];
         $s_capacity = $row_storage['s_capacity'];
         $s_price = $row_storage['s_price'];
         $s_details = $row_storage['s_details'];
          
      }
  ?>


<form action="" method="post" enctype= "multipart/form-data">
      <h1 class="text-center py-5"> Edit details of the Storage</h1>
      
        <div class="mb-3">
            <label class="form-label">Storage Name</label>
            <input type="text" name="s_name" class="form-control"  value = "<?php echo $s_name; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Storage Capacity</label>
            <input type="text" name="s_capacity" class="form-control"  value = "<?php echo $s_capacity; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Price </label>
            <input type="number" name="s_price" class="form-control" value = "<?php echo $s_price; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Storage Details</label>
           <textarea rows="4" cols="50" class="form-control" name="s_details"><?php echo $s_details; ?> </textarea>
        </div>
        <button type="submit" name="insert-btn" class="btn btn-success">Submit</button>
</form>

<?php

include_once '../dbconn.php'; 

if(isset($_POST['insert-btn'])){

    $es_name = $_POST['s_name'];
    $es_capacity = $_POST['s_capacity'];
    $es_price = $_POST['s_price'];
    $es_details = $_POST['s_details'];

   $update = "UPDATE storage SET s_name='$es_name',s_capacity='$es_capacity',s_price='$es_price',s_details='$es_details' WHERE s_id='$edit_id' ";

    $run_update = mysqli_query($conn, $update);

    if($run_update == true){
        echo "data updated";
        header("Location: storage_data.php");

    }else{
        echo "update failed";
    }

}


?>



</div>
 
</body>
</html>