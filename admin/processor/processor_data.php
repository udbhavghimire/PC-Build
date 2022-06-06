<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processor List</title>

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
            <h1 class="text-center py-5">Processor List</h1> 
        </div>
        <div class="col-md-2 py-5">
            <a href="add_processor.php" class="btn btn-success float-end">Add Processor</a>
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

include_once 'delete_processor.php';

$select = "SELECT * FROM processor"; 

$run = mysqli_query($conn,$select);

while($row_processor = mysqli_fetch_array($run)){
    $p_id = $row_processor['p_id'];
    $p_name = $row_processor['p_name'];
    $p_price = $row_processor['p_price'];
    $p_details = $row_processor['p_details'];

  ?>
    <tr>
      <td><?php echo $p_id; ?></td>
      <td><?php echo $p_name; ?></td>
      <td><?php echo $p_price; ?></td>
      <td><?php echo "<pre>".$p_details."</pre>"; ?></td>
      <td><a class="btn btn-outline-secondary" href="edit_processor.php?edit=<?php echo $p_id; ?>">Edit</a> </td>
      <td><a class="btn btn-danger" onclick="showConfirm()" href="processor_data.php?del=<?php echo $p_id; ?>">Delete</a> </td>
      
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