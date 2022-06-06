<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage List</title>

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-2 py-5">
        <a href="../index.html" class="btn btn-primary  float-start">Dashboard</a> 
        </div>
        <div class="col-md-8">
            <h1 class="text-center py-5">Storage List</h1> 
        </div>
        <div class="col-md-2 py-5">
            <a href="add_storage.php" class="btn btn-success float-end">Add Storage</a>
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
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php

include_once '../dbconn.php'; 

include_once 'delete_storage.php';

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
      <td><?php echo $s_id; ?></td>
      <td><?php echo $s_name; ?></td>
      <td><?php echo $s_capacity; ?></td>
      <td><?php echo $s_price; ?></td>
      <td><?php echo "<pre>".$s_details."</pre>"; ?></td>
      <td><a class="btn btn-outline-secondary" href="edit_storage.php?edit=<?php echo $s_id; ?>">Edit</a> </td>
      <td><a class="btn btn-danger" onclick="showConfirm()" href="storage_data.php?del=<?php echo $s_id; ?>">Delete</a> </td>
      
    </tr>
<?php  } ?>

  </tbody>
</table>


</div>
</body>
<script type="text/javascript">
    function showConfirm(){
        var confirmbox=confirm("Are you sure you want to delete the record?");
        if(!confirmbox){
            event.preventDefault();
        }
    }


</script>

        
    </div>
</body>
</html>