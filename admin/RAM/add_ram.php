<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Add RAM</title>
</head>
<body>
<div class="container">
<form action="" method="post" enctype= "multipart/form-data">
      <h1 class="text-center py-5"> ADD details of the RAM</h1>
      
        <div class="mb-3">
            <label class="form-label">RAM Name</label>
            <input type="text" name="r_name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Capacity </label>
            <input type="text" name="r_capacity" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Price </label>
            <input type="number" name="r_price" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">RAM Details</label>
           <textarea rows="4" cols="50" class="form-control" name="r_details"> </textarea>
        </div>
        <button type="submit" name="insert-btn" class="btn btn-success">Submit</button>
</form>

<?php

include_once '../dbconn.php';

if(isset($_POST['insert-btn'])){

    $r_name = $_POST['r_name'];
    $r_capacity = $_POST['r_capacity'];
    $r_price = $_POST['r_price'];
    $r_details = $_POST['r_details'];

    $insert = "INSERT INTO ram (r_name, r_capacity, r_price, r_details) VALUES ('$r_name','$r_capacity','$r_price','$r_details')";

    $run_insert = mysqli_query($conn, $insert);

    if($run_insert == true){
        echo "data inserted";
        header("Location: ram_data.php");
    }else{
        echo "insertion failed";
    }

}

    




?>
 
</body>
</html>