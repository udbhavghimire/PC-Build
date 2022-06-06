<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Add Storage</title>
</head>
<body>
<div class="container">
<form action="" method="post" enctype= "multipart/form-data">
      <h1 class="text-center py-5"> ADD details of the Storage</h1>
      
        <div class="mb-3">
            <label class="form-label">Storage Name</label>
            <input type="text" name="s_name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Capacity </label>
            <input type="text" name="s_capacity" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Price </label>
            <input type="number" name="s_price" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Storage Details</label>
           <textarea rows="4" cols="50" class="form-control" name="s_details"> </textarea>
        </div>
        <button type="submit" name="insert-btn" class="btn btn-success">Submit</button>
</form>

<?php

include_once '../dbconn.php';

if(isset($_POST['insert-btn'])){

    $s_name = $_POST['s_name'];
    $s_capacity = $_POST['s_capacity'];
    $s_price = $_POST['s_price'];
    $s_details = $_POST['s_details'];

    $insert = "INSERT INTO storage (s_name, s_capacity, s_price, s_details) VALUES ('$s_name','$s_capacity','$s_price','$s_details')";

    $run_insert = mysqli_query($conn, $insert);

    if($run_insert == true){
        echo "data inserted";
        header("Location: storage_data.php");
    }else{
        echo "insertion failed";
    }

}

    




?>
 
</body>
</html>