<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAM List</title>

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-2 py-5">
        <a href="../index.php" class="btn btn-primary  float-start">Dashboard</a> 
        </div>
        <div class="col-md-8">
            <h1 class="text-center py-5">RAM List</h1> 
        </div>
        <div class="col-md-2 py-5">
            <a href="add_ram.php" class="btn btn-success float-end">Add RAM</a>
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

include_once 'delete_ram.php';

$select = "SELECT * FROM ram"; 

$run = mysqli_query($conn,$select);

while($row_ram = mysqli_fetch_array($run)){
    $r_id = $row_ram['r_id'];
    $r_name = $row_ram['r_name'];
    $r_capacity = $row_ram['r_capacity'];
    $r_price = $row_ram['r_price'];
    $r_details = $row_ram['r_details'];

  ?>
    <tr>
      <td><?php echo $r_id; ?></td>
      <td><?php echo $r_name; ?></td>
      <td><?php echo $r_capacity; ?></td>
      <td><?php echo $r_price; ?></td>
      <td><?php echo "<pre>".$r_details."</pre>"; ?></td>
      <td><a class="btn btn-outline-secondary" href="edit_ram.php?edit=<?php echo $r_id; ?>">Edit</a> </td>
      <td><a class="btn btn-danger" onclick="showConfirm()" href="ram_data.php?del=<?php echo $r_id; ?>">Delete</a> </td>
      
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