<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSU List</title>

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
            <h1 class="text-center py-5">PSU List</h1> 
        </div>
        <div class="col-md-2 py-5">
            <a href="add_psu.php" class="btn btn-success float-end">Add PSU</a>
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

include_once 'delete_psu.php';

$select = "SELECT * FROM psu"; 

$run = mysqli_query($conn,$select);

while($row_psu = mysqli_fetch_array($run)){
    $ps_id = $row_psu['ps_id'];
    $ps_name = $row_psu['ps_name'];
    $ps_watt = $row_psu['ps_watt'];
    $ps_price = $row_psu['ps_price'];
    $ps_details = $row_psu['ps_details'];

  ?>
    <tr>
      <td><?php echo $ps_id; ?></td>
      <td><?php echo $ps_name; ?></td>
      <td><?php echo $ps_watt; ?></td>
      <td><?php echo $ps_price; ?></td>
      <td><?php echo "<pre>".$ps_details."</pre>"; ?></td>
      <td><a class="btn btn-outline-secondary" href="edit_psu.php?edit=<?php echo $ps_id; ?>">Edit</a> </td>
      <td><a class="btn btn-danger" onclick="showConfirm()" href="psu_data.php?del=<?php echo $ps_id; ?>">Delete</a> </td>
      
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