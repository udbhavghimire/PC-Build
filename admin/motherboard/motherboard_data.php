<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motherboard List</title>

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
            <h1 class="text-center py-5">Motherboard List</h1> 
        </div>
        <div class="col-md-2 py-5">
            <a href="add_motherboard.php" class="btn btn-success float-end">Add Motherboard</a>
        </div>
  <hr>
  </div>

  <table class="table table-striped table-bordered" >
  <thead>
    <tr>
      <th>SN</th>
      <th>Name</th>
      <th>Price</th>
      <th>Details</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php

include_once '../dbconn.php'; 

include_once 'delete_motherboard.php';

$select = "SELECT * FROM motherboard"; 

$run = mysqli_query($conn,$select);

while($row_motherboard = mysqli_fetch_array($run)){
    $m_id = $row_motherboard['m_id'];
    $m_name = $row_motherboard['m_name'];
    $m_price = $row_motherboard['m_price'];
    $m_details = $row_motherboard['m_details'];

  ?>
    <tr>
      <td><?php echo $m_id; ?></td>
      <td><?php echo $m_name; ?></td>
      <td><?php echo $m_price; ?></td>
      <td><?php echo "<pre>".$m_details."</pre>"; ?></td>
      <td><a class="btn btn-outline-secondary" href="edit_motherboard.php?edit=<?php echo $m_id; ?>">Edit</a> </td>
      <td><a class="btn btn-danger" onclick="showConfirm()" href="motherboard_data.php?del=<?php echo $m_id; ?>">Delete</a> </td>
      
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