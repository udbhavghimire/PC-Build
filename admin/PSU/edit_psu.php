<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Edit PSU Details</title>
</head>
<body>
<div class="container">

<?php

      include_once '../dbconn.php'; 

      if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];

        $select = "SELECT * FROM psu WHERE ps_id = $edit_id ";

         $run = mysqli_query($conn,$select);
         $row_psu = mysqli_fetch_array($run);

         $ps_name = $row_psu['ps_name'];
         $ps_watt = $row_psu['ps_watt'];
         $ps_price = $row_psu['ps_price'];
         $ps_details = $row_psu['ps_details'];
          
      }
  ?>


<form action="" method="post" enctype= "multipart/form-data">
      <h1 class="text-center py-5"> Edit details of the PSU</h1>
      
        <div class="mb-3">
            <label class="form-label">PSU Name</label>
            <input type="text" name="ps_name" class="form-control"  value = "<?php echo $ps_name; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">PSU Capacity</label>
            <input type="text" name="ps_watt" class="form-control"  value = "<?php echo $ps_watt; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Price </label>
            <input type="number" name="ps_price" class="form-control" value = "<?php echo $ps_price; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">PSU Details</label>
           <textarea rows="4" cols="50" class="form-control" name="ps_details"><?php echo $ps_details; ?> </textarea>
        </div>
        <button type="submit" name="insert-btn" class="btn btn-success">Submit</button>
</form>

<?php

include_once '../dbconn.php'; 

if(isset($_POST['insert-btn'])){

    $eps_name = $_POST['ps_name'];
    $eps_watt = $_POST['ps_watt'];
    $eps_price = $_POST['ps_price'];
    $eps_details = $_POST['ps_details'];

   $update = "UPDATE psu SET ps_name='$eps_name',ps_watt='$eps_watt',ps_price='$eps_price',ps_details='$eps_details' WHERE ps_id='$edit_id' ";

    $run_update = mysqli_query($conn, $update);

    if($run_update == true){
        echo "data updated";
        header("Location: psu_data.php");

    }else{
        echo "update failed";
    }

}


?>



</div>
 
</body>
</html>