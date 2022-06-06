<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Edit Motherboard Details</title>
</head>
<body>
<div class="container">

<?php

      include_once '../dbconn.php'; 

      if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];

        $select = "SELECT * FROM motherboard WHERE m_id = $edit_id ";

         $run = mysqli_query($conn,$select);
         $row_motherboard = mysqli_fetch_array($run);

         $m_name = $row_motherboard['m_name'];
         $m_price = $row_motherboard['m_price'];
         $m_details = $row_motherboard['m_details'];
      }
  ?>


<form action="" method="post" enctype= "multipart/form-data">
      <h1 class="text-center py-5"> Edit details of the Motherboard</h1>
      
        <div class="mb-3">
            <label class="form-label">Motherboard Name</label>
            <input type="text" name="m_name" class="form-control"  value = "<?php echo $m_name; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Price </label>
            <input type="number" name="m_price" class="form-control" value = "<?php echo $m_price; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Motherboard Details</label>
           <textarea rows="4" cols="50" class="form-control" name="m_details"><?php echo $m_details; ?> </textarea>
        </div>
        <button type="submit" name="insert-btn" class="btn btn-success">Submit</button>
</form>

<?php

include_once '../dbconn.php'; 

if(isset($_POST['insert-btn'])){

    $em_name = $_POST['m_name'];
    $em_price = $_POST['m_price'];
    $em_details = $_POST['m_details'];

   $update = "UPDATE motherboard SET m_name='$em_name',m_price='$em_price',m_details='$em_details' WHERE m_id='$edit_id' ";

    $run_update = mysqli_query($conn, $update);

    if($run_update == true){
        echo "data updated";
        header("Location: motherboard_data.php");

    }else{
        echo "update failed";
    }

}


?>



</div>
 
</body>
</html>